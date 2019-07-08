<?php

session_start();

if(!isset($_SESSION['logged'])){
    header('Location: index.php');
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {



if (isset($_POST['id']) === true ) 
    {

    $user_id = $_POST['id'];

?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title></title>
        <link rel="stylesheet" href="web/css/bootstrap.css" >
    </head>
    <body style="background-color: #bee5eb">
            <div class="container">
            <div><img src="web/img/logo.png" ></div>
            <form action="send_message.php" method="post" class="form-group">
                <label>Treść<br><input type="text" style="width:200px; height:50px;" name="message"></label></br> 
                <input type="hidden" name="receiver" value="<?php echo $user_id;  ?>"></label>
                <input class="btn-light" type="submit" value="wyślij wiadomość" > 
                </form>
        
                            <?php   
                 
    
                 include_once 'public/admin/loadCommentsByUser.php';
                    
                    foreach ($result as $row) {
                        
                        static $counter = 1;
                        $comments = $row->getComments();
                        $id = $row->getComments_id();   
                        
                       //$id = $result->getUsername();
                        
                        
                        echo '
                            
                              <div class="media">
                             
                              <div class="media-body">Post ' . $counter . '</div>
                              <div class="media-body" style="background-color: white">' . $comments . ' </div>
                              <form action="tweet_page.php" method="post"> <input type = "hidden" name="comment_id" value = "'. $id .'"><input type="submit" value="odpowiedz"></form>
                              <br>
                              </div><br>';
                        
                        $counter = $counter +1;
                        
                        }
                       }
}
                    
                    ?>
        
        
        
        
        
                        </div>
                        
    </body>
</html>
