<?php



include_once __DIR__ .  '/../connection.php';
include_once __DIR__ .  '/../autoload.php';
 
$new_message = new Inbox();
$new_message->setReceiver($receiver);
$new_message->setMessage($message);
$new_message->setSender($sender);
$new_message->setDate($date);

$result = $new_message->save($connection);


 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

