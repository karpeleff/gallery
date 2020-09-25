<?php

namespace  app;
use \App\DB;
use App\view\Template;

class Application
{
    private $db;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function  index()
    {
        $data = $this->fetchAll();

         return Template::index($data);
    }

    public function  form($data)
    {
      return Template::form($data);
    }

    public  function  add()
    {
        if(isset($_FILES) && $_FILES['file']['error'] == 0){

            $destiation_dir =  $_SERVER['DOCUMENT_ROOT'].'/img/'.$_FILES['file']['name'];

            move_uploaded_file($_FILES['file']['tmp_name'], $destiation_dir );

           $data['success'] = 'File Uploaded';
        }
        else{
            $data['error'] = 'No File Uploaded';
        }

        $sql = "INSERT INTO staff (file, tel, email, age) VALUES (:file, :tel, :email, :age)";

        $params = [':file'=>$_FILES['file']['name'], ':tel'=>$_POST['tel'], ':email'=>$_POST['email'], ':age'=>$_POST['age'] ];

         $this->db->query($sql,$params);//запись в бд

        $this->form($data);

    }

    public function fetchAll()//выборка из бд
    {

        $sql = "SELECT * FROM staff ORDER BY id DESC LIMIT 9";

       $data =  $this->db->query($sql);

       return $data;

    }

    public  function dump($data)
    {   echo '<pre>';
        var_dump($data);
        echo '</pre>';
    }


	
}