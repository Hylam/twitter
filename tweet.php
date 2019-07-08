<?php

session_start();

if(!isset($_SESSION['logged'])){
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {



if (isset($_POST['comments']) === true ) 
    {
    $username = $_SESSION['id'];
    $comments = $_POST['comments'];
    
   include 'public/admin/addComments.php';
    
    
   header('Location: main.php');
    

   }
   
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

