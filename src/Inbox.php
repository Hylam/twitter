<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Inbox
 *
 * @author mateusz
 */
class Inbox {
    
    private $message_id;
    private $receiver;
    private $message;
    private $sender;
    private $ready;
    private $date;    //put your code here
    
    public function __construct()
    {
        $this->message_id = -5;
        $this->ready = 0;
    }
    
    function getMessage_id() {
        return $this->message_id;
    }

    function getReceiver() {
        return $this->receiver;
    }

    function getSender() {
        return $this->sender;
    }

    function getReady() {
        return $this->ready;
    }

    function getDate() {
        return $this->date;
    }

    function getMessage() {
        return $this->message;
    }

    function setMessage($message) {
        $this->message = $message;
    }   

        
    function setMessage_id($message_id) {
        $this->message_id = $message_id;
    }

    function setReceiver($receiver) {
        $this->receiver = $receiver;
    }

    function setSender($sender) {
        $this->sender = $sender;
    }

    function setReady($ready) {
        $this->ready = $ready;
    }

    function setDate($date) {
        $this->date = $date;
    }
    
    
    
        public function save(PDO $pdo)
    {
        if ($this->message_id !== -1) {
            
            //"INSERT INTO `Inbox` (`message_id`, `receiver`, `message`, `sender`, `ready`, `date`) VALUES (NULL, '2', 'mati', '3', '1', '')";
                   // INSERT INTO `Inbox` ( `receiver`, `message`, `sender`, `date`) VALUES ('2', 'bgnnhnh', '4', '2019-07-04 05:13:16')
                    //INSERT INTO Inbox(receiver, message, sender, date) VALUES (:receiver, :message, :sender, :date)
            $sql = "INSERT INTO `Inbox`(`message_id`, `receiver`, `message`, `sender`, `ready`, `date`) VALUES (NULL, :receiver, :message, :sender, :ready, :date)";
 
            $prepare = $pdo->prepare($sql);
            $result = $prepare->execute(
                [
                    'receiver'    => $this->receiver,
                    'message'     => $this->message,
                    'sender'      => $this->sender,
                    'ready'       => $this->ready,
                    'date'        => $this->date,
                ]
            );
 
            // Pobranie ostatniego ID dodanego rekordu
            $this->message_id = $pdo->lastInsertId();
 
            return (bool)$result;
        } else {
 
        }

    }


}
