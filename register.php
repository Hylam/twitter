
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="web/css/bootstrap.min.css" >
        <title></title>
    </head>
    <body style="background-color: #bee5eb">
        <div class="container">
            <div><img src="web/img/logo.png" ></div>

        <?php

$html1 = '<form action="" method="post" class="form-group">
                <label>Nazwa Użytkownika <input type="text" name="username"></label></br>
                <label>Adres Email <input type="email" name="email"></label></br>
                <label>Hasło <input type="password" name="pass"></label></br>
                <label>Powtórz hasło <input type="password" name="pass2"></label></br>
                
                <input type="submit" value="Utwórz konto">   
            </form>';

$html2 = '<p>Konto zostało utworzone</p>       
        <div>
        <button><a href="index.php">Przejdź do strony logowania</a></button>
        </div>';

$html3 = '<div>
            Proszę uzupełnić wszystkie wymagane pola
        </div>';

$html4 = '<div>
            Podane hasła nie są takie same
        </div>';
        
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    if (    isset($_POST['username']) === true && 
            isset($_POST['email']) === true && 
            isset($_POST['pass']) === true && 
            isset($_POST['pass2']) === true)
        {
    
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $pass2 = $_POST['pass2'];
        
            if($pass == $pass2){
                
             include_once 'public/admin/addUser.php';
             echo $html2;
             }
             else {
                      echo $html1;
                      echo $html4;
                 
             }
    }
     else {
     
     echo $html1;
     echo $html3;
        
    }
}
 else {
    
     echo $html1;
};
        


        ?>
        </div>
    </body>
</html>

