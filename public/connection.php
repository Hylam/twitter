<?php
include_once __DIR__ . '/../config/db.php';
 
//Poniżej napisz kod łączący się z bazą danych
$connection = new PDO(sprintf("mysql:host=%s;dbname=%s", $hostname, $dbname), $user, $password);
 
if ($connection->errorCode() != null) {
    var_dump($connection->errorInfo());
    die();
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

