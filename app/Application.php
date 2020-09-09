<?php

namespace  App;

use  \App\StoreController ;

use \App\OprsController;

class Application
{
	public function  index()
    {

      echo "я есть грут";
    }


    public  function dump($data)
    {
     echo '<pre>';
     var_dump($data);
     echo '</pre>';
    }

    public  function  main ($data)
    {

       // $this->dump($data);
        //exit;

       $controller = 'App\\'.$data[1];
        //$controller = 'StoreController';
        $route = new  $controller();

        $method = $data[2]['method'];

        $route->$method();
    }



	
}