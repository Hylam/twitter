<?php

session_start();

if(!isset($_SESSION['logged'])){
    header('Location: index.php');
    exit();
}




?>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title></title>
        <link rel="stylesheet" href="web/css/bootstrap.css" >
    </head>
    <body style="background-color: #bee5eb">
        
        <?php echo "<p>Witaj "  . $_SESSION['user'] . ' <a href="logout.php">Wyloguj Sie</a> <p>'; ?>
        
        
                <form action="tweet.php" method="post" class="form-group">
                <label>Treść<br><input type="text" style="width:200px; height:50px;" name="comments"></label></br>     
                <input class="btn-light" type="submit" value="Dodaj Wpis" > 
                </form>
        
        
        
        
        <div class="container">
            <div><img src="web/img/logo.png" ></div>
                <div class="well">
                    
                    <?php   
                    
                    include_once 'public/admin/loadAllComments.php';
                    
                    foreach ($result as $row) {
                        
                        
  
                        $comments = $row->getComments();
                        echo '<div class="media"><div class="media-body" style="background-color: white">' . $comments . '</div></div>';
                        
                    }
                    
                    
                    ?>
    

                    
                </div>
        </div>

    </body>
</html>

