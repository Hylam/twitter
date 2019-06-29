<?php



include_once __DIR__ .  '/../connection.php';
include_once __DIR__ .  '/../autoload.php';
 
$new_comments = new Comments();
$new_comments->setComments($comments);
$new_comments->setUser_id($username);

$result = $new_comments->save($connection);


 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

