<?php

require_once 'lib/conn.php';
require_once 'db/database.php';
//require_once 'config.php';
require_once 'lib/render.php';



if(($name = filter_input(INPUT_POST,'name')) !=null and ($task = filter_input(INPUT_POST, 'task'))!=null and ($date = filter_input(INPUT_POST, 'date'))!=null){
    
    $gdb= getConnection( $dsn, $dbuser, $dbpasswd);
    if(task($gdb,$name,$task,$date)){
        header('Location:?url=task');
    }else{
        header('Location:?url=badlogin');
    }
    
        
    
    
}