<?php

include 'src\models\Model.php';

class Chat extends Model {
    public function getMessages() {
        $stmt = $this->db->query("SELECT * FROM messages");
        return $stmt->fetchAll();
    }

    public function addMessage($message, $username) {
        $time = time();
        $stmt = $this->db->prepare("INSERT INTO messages (message, username, epoch) VALUES (:message, :username, :epoch)");
        $stmt->execute(['message' => $message, 'username' => $username, 'epoch' => $time]);
        return ['message' => $message, 'username' => $username, 'epoch' => $time];
    }
}