<?php

use App\Controllers;
use App\Controllers\LoginController;

//require('vendor/autoload.php');
require('config.php');

if(!isset($_REQUEST['view'])){
	$_REQUEST['view'] = 'saveur';
}	 

$view = $_REQUEST['view'];


switch ($view) {
    case 'saveur':
    {
        $controller = new App\Controllers\Controller();
        $controller->render('saveur');
        break;
    }
    case 'login':
    {
        $controller = new App\Controllers\LoginController\LoginController();
        $controller->login();
        break;
    }
    default:
    {
        $controller = new App\Controllers\Controller();
        $controller->render('404error');
        break;
    }
}