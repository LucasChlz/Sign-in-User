<?php

namespace App\Models;
use \App\Database\Sql as Sql;

class RegisterModel
{
    public function registerUser($data)
    {
        $name = filter_var($data['name'], FILTER_SANITIZE_STRING);
        $email = $data['email'];
        $password = $data['password'];

        if(empty($name) || empty($email) || empty($password)) {

            $_SESSION['error_msg'] = "Fill all fields";
            header('Location: '.URL);
            die();
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $_SESSION['error_msg'] = "Invalid E-mail";
            header('Location: '.URL);
            die();
        }else {

            $emailVerify = Sql::connect()->prepare("SELECT * FROM `tb.users` WHERE email = ?");
            $emailVerify->execute(array($email));

            if($emailVerify->rowCount() == 1) {
                

                $_SESSION['error_msg'] = "This email already exists";
                header('Location: '.URL);
                die();
            }else {
                
                $registerUser = Sql::connect()->prepare("INSERT INTO `tb.users` VALUES (null,?,?,?)");
                
                if($registerUser->execute(array($name,$email,sha1($password)))) {
    
                    $_SESSION['success_msg'] = "Account successfully created";
                    header('Location: '.URL);
                    die();
                }
            }
        }
    }
} 