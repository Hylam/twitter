<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Comments
 *
 * @author mateusz
 */
class Comments {
    //put your code here
    
    private $comments_id;
    private $user_id;
    private $comments;
    
        public function __construct()
    {
        $this->comments_id = -1;
    }
    
    function getComments_id() {
        return $this->comments_id;
    }

    function getUser_id() {
        return $this->user_id;
    }

    function getComments() {
        return $this->comments;
    }

    function setComments_id($comments_id) {
        $this->comments_id = $comments_id;
    }

    function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    function setComments($comments) {
        $this->comments = $comments;
    }

    public function save(PDO $pdo)
    {
        if ($this->comments_id == -1) {
 
            $sql = "INSERT INTO Comments(user_id, comments) VALUES (:user_id, :comments)";
 
            $prepare = $pdo->prepare($sql);
            // Wysłanie zapytania do bazy z kluczami i wartościami do podmienienia
            $result = $prepare->execute(
                [
                    'user_id'     => $this->user_id,
                    'comments'    => $this->comments,
                    
                ]
            );
 
            // Pobranie ostatniego ID dodanego rekordu
            $this->comments_id = $pdo->lastInsertId();
 
            return (bool)$result;
        } else {
 
        }

    }
    
    static public function loadCommentsByID(PDO $connecion, $comments_id) {
        
        $stmt = $connecion->prepare('SELECT * FROM Comments WHERE comments_id=:comments_id');
        $result = $stmt->execute(['comments_id' => $comments_id]);
        
        if ($result === true && $stmt->rowCount() > 0) {

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $loadComments = new Comments();
        $loadComments->comments_id = $row['comments_id'];
        $loadComments->comments = $row['comments'];
        $loadComments->user_id = $row['user_id'];

        return $loadComments;

        }

        return null;
        
        }
        
        static public function loadCommentsByUser(PDO $connecion, $user_id) {
                
            $stmt = $connecion->prepare('SELECT * FROM Comments WHERE user_id=:user_id');
            $result = $stmt->execute(['user_id' => $user_id]);

            $ret = [];

            if ($result === true && $stmt->rowCount() != 0) {

                 foreach ($stmt as $row) {
                    $loadedCommentsByUser = new Comments();
                    $loadedCommentsByUser->comments_id = $row['comments_id'];
                    $loadedCommentsByUser->comments = $row['comments'];
                    $loadedCommentsByUser->user_id = $row['user_id'];

                    $ret[] = $loadedCommentsByUser;

                    }

            }

            return $ret;
    
    
            }
    
        static public function loadAllComments(PDO $connecion) {
                
            $sql = 'SELECT * FROM Comments';
            $ret = [];
        
            $result = $connecion->query($sql);
            if ($result !== false && $result->rowCount() != 0) {

                 foreach ($result as $row) {
                    $loadedUser = new Comments();
                    $loadedUser->comments_id = $row['comments_id'];
                    $loadedUser->comments = $row['comments'];
                    $loadedUser->user_id = $row['user_id'];

                    $ret[] = $loadedUser;

                    }

            }

            return $ret;
    
    
            }
}