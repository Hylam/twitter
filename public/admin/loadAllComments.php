<?php



include_once __DIR__ .  '/../connection.php';
include_once __DIR__ .  '/../autoload.php';
 
$all_comments = new Comments();
$result = $all_comments->loadAllComments($connection);


 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

