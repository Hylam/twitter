<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
        
$action="";
$nouser="";
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
    
    foreach($table as $row){
        
    if($row['username']== $name = $_POST['username'] &&  $row["hash_password"] == $_POST['pass'])
        {
         $action = 'main.php';
        }
        else{$nouser = "nie ma takiego użytkownika";}
        
          
    }
    
   /*  $result = $connection->query($sql);

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
    */
    } 
}
                   
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <form action="<?php echo "$action" ?>" method="post">
                <label>Login <input type="text" name="username"></label></br>
                <label>Hasło <input type="password" name="pass"></label></br>
                
                <input type="submit" value="Zaloguj">   
            </form>
            <button><a href="register.php">Utwórz Konto</a></button>
            <?php echo "<br> $nouser" ?>
        </div>

    </body>
</html>
