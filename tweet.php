<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {



if (isset($_POST['comments']) === true ) 
    {
    $username = $_SESSION['id'];
    $comments = $_POST['comments'];
    
    include_once 'public/admin/addUser.php';
    include_once 'public/admin/addComments.php';
    header('Location: main.php');
    $connection->close();

   }
   
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

