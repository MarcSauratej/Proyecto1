<?php

//establecer errores
ini_set('display_errors','On');
session_start();
require 'vendor/autoload.php';
$dotenv =Dotenv\Dotenv::createImmutable(__DIR__);

$dotenv->load();

$_SESSION['nav']=['home'];

require 'config.php';
//require 'lib/conn.php';
//require 'lib/render.php';
require 'src/router.php';



$controler=getRoute();
/*var_dump($controler);
die();*/


require APP.'/src/controllers/'.$controler.'.php';

