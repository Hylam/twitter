<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
       
session_start();

if((isset($_SESSION['logged'])) && ($_SESSION['logged'] = TRUE))
{
    header('Location: main.php');
    exit();
}

        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="web/css/bootstrap.min.css" >
    </head>
    <body style="background-color: #bee5eb">
        <div class="container">
            <div><img src="web/img/logo.png" ></div>
                <div class="container">
                    <form action="Scripts/login.php" method="post" class="form-group">
                <label>Login <input type="text" name="username"></label></br>
                <label>Hasło <input type="password" name="pass"></label></br>      
                <input class="btn-light" type="submit" value="Zaloguj" > 
                <button><a class="btn-light" href="register.php">Utwórz Konto</a></button>
                </form>
                    <?php
                    
                    If(isset($_SESSION['blad']))
                        echo $_SESSION['blad'];
                    
                    ?>
                    
                </div>
        </div>

    </body>
</html>
