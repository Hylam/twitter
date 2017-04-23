<?php

include_once '../connection.php';
include_once '../autoload.php';
 
$user = new User();
$user->setEmail('tt@tt.pl');
$user->setUsername('test');
$user->setHashPassword('password');

$result = $user->save($connection);

echo 'Mamy usera';
 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

