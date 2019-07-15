<?php

session_start();

if(!isset($_SESSION['logged'])){
    header('Location: ../index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {



if (isset($_POST['receiver'])  === true && isset($_POST['message']) === true ) 
    {
    $sender = $_SESSION['user'];
    $receiver = $_POST['receiver'];
    $message = $_POST['message'];
    $date = new DateTime();
    $date = $date->format('Y-m-d H:i:s');
    
    //echo $sender . '  ' . 
    
    
    
    include_once '../public/admin/addMessage.php';
    
    echo  $new_message->getSender() . "  " . $sender;
    

   header('Location: ../main.php');
    

   }
   
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

