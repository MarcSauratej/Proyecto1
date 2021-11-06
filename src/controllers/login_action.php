<?php
require_once 'lib/conn.php';
require_once APP.'/db/database.php';
require_once 'config.php';

$caja=filter_input(INPUT_POST, 'caja');
$gdb= getConnection( $dsn, $dbuser, $dbpasswd);

if(($email = filter_input(INPUT_POST,'email')) !=null and ($passwd = filter_input(INPUT_POST, 'passwd'))!=null){
    
    if (auth($gdb,$email,$passwd)){
     if($caja == true){
        setcookie("ID",$email, 0,'/','localhost' );
     }
    header('Location:?url=dashboard');
    }  else{
        header('Location:?url=badlogin');
    }
}
