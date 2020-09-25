<?php
require_once 'vendor/autoload.php';



use \App\Application;

$app = new Application();

$route =  $_SERVER['REQUEST_URI'];

switch ($route) {
    case '/':
        $app->index();
        break;

    case '/add':
        $app->add();
        break;
    case '/page':
        $app->page();
        break;
    case '/form':
        $app->form($data = null);
        break;
    default:
        echo '404   нет такой страницы <br><a href="/">На главную</a>"' ;
}
//echo 'index';