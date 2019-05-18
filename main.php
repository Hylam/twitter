<?php

session_start();
$_SESSION['username']=$_POST['username'];

$login = $_SESSION['username'];

echo $login;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$name ="";
$pass ="";

if (isset($_POST['username']) === true && isset($_POST['pass']) === true) 
    {
    $name = $_POST['username'];
    $pass = $_POST['pass'];
    
    require_once 'public/connection.php';
    
    $sql = "SELECT id, username, hash_password FROM Users";
    $result = $connection->query($sql);
    
    $table = $result->fetchAll(PDO::FETCH_ASSOC);
    print_r($table);
    
    
   
    foreach($result as $row) {

    // Wypisz na ekran dane
    echo(" id: " . $row['id']);
    echo "<br>";
    echo(" login: " . $row['username']); 
    echo "<br>";
    echo (" hasło: " . $row['hash_password']) ;
    echo "<br>";

}
    
    

    echo "  $name + $pass";

} 

else {

echo 'nie ma takiego urzytkownika';

}

}
