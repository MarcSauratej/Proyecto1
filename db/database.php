<?php

function auth($gdb,$email,$passwd):bool{
    try{ 
        
        $stmt=$gdb->prepare('SELECT * FROM users WHERE email=:email LIMIT 1');
        $stmt->execute([':email'=>$email]);
        $count=$stmt->rowCount();
        $row=$stmt->fetchAll(PDO::FETCH_ASSOC);
        if($count==1){
            $user=$row[0];
            $res=password_verify($passwd,$user['passwd']);
            //$res = $_POST['passwd'] == $row[0]['passwd'];
            if ($res){ 
                $_SESSION['username']=$user['username'];
                $_SESSION['email']=$user['email'];
                return true;
            }else{ 
                return false;
             } 
            }else{ 
                return false;
            } 
        }catch(PDOException $e){ 
            return false;
         } 
}


function register ($gdb,$username, $passwd,$email,$rolstatus):bool{
    if($username !=null and $passwd!=null and $email!=null and $rolstatus !=null){
        $stmt = $gdb->prepare("INSERT INTO users(username, passwd, email,rolstatus) VALUES (?, ?, ?, ?)");
        $stmt->bindParam(1, $username);
        $stmt->bindParam(2, password_hash($passwd,PASSWORD_BCRYPT));
        $stmt->bindParam(3, $email);
        $stmt->bindParam(4, $rolstatus);
        $stmt->execute();
        return true;
    }
    return false;
}


function task ($gdb,$name,$task, $date):bool{
    if($name  !=null and $task !=null and $date!=null){
        $stmt = $gdb->prepare("INSERT INTO tasks(name, task, date) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $task);
        $stmt->bindParam(3, $date);
        $stmt->execute();
        return true;
    }
    return false;
}