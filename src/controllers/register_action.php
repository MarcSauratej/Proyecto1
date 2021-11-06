<?php

require_once 'lib/conn.php';
require_once 'db/database.php';
//require_once 'config.php';
require_once 'lib/render.php';



if(($username = filter_input(INPUT_POST,'username')) !=null and ($passwd = filter_input(INPUT_POST, 'passwd'))!=null 
and  ($email = filter_input(INPUT_POST,'email')) !=null and ($rolstatus = filter_input(INPUT_POST,'rolstatus')) !=null){
    
    $gdb= getConnection( $dsn, $dbuser, $dbpasswd);
    if(register($gdb,$username,$passwd, $email,$rolstatus)){
        header('Location:?url=login');
    }
    else{
        header('Location:?url=badlogin');
    }
    
       
    
    
}

