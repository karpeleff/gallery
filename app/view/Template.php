<?php


namespace App\view;


class Template
{
   public function form($data)
   {
       require 'header.php';
       require 'form.php';
       require 'footer.php';

   }

    public function index($data)
    {
        require 'header.php';
        require 'main.php';
        require 'footer.php';

    }



}