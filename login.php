<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {



if (isset($_POST['username']) === true && isset($_POST['pass']) === true) 
    {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    
    require_once 'public/connection.php';
    
    $sql = "SELECT * FROM Users WHERE username ='$username' AND hash_password ='$pass'" ;
    if($result = $connection->query($sql))
            {
            $num_users = $result->rowCount();
            
                If($num_users>0)
                    {
                    
                    $_SESSION['logged'] = true;
                    
                     $row = $result->fetch(PDO::FETCH_ASSOC);
                     
                     $_SESSION['user']=$row['username'];
                     $_SESSION['id'] = $row['id'];

                     header('Location: main.php');
                     unset($_SESSION['blad']);
                    }
                    else{
                        
                        $_SESSION['blad'] = '<span style="color:red"> Nieprawidłowy login lub hasło</spa>';
                        header('Location: index.php');
                    }
        
            
            };
    

   }
   $connection->close();
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

