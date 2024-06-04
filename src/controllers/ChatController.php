<?php

require 'src\controllers\Controller.php';
require 'src\models\Chat.php';


class ChatController extends Controller {
    public function login() {
        session_start();
        if (isset($_POST['username'])) {
            $_SESSION['username'] = $_POST['username'];
            return header('Location: chat');
        }
        return $this->render('login');
    }

    public function logout() {
        session_start();
        session_destroy();
        return header("Location: login");
    }

    public function chat() {
        session_start();
        if (!isset($_SESSION['username'])) {
            return header('Location: login');
        }
        return $this->render('chat', ['currentUsername' => $_SESSION['username']]);
    }

    public function messageList() {
        $chat = new Chat();
        $messages = $chat->getMessages();
        echo json_encode($messages);
        return;
    }

    public function addMessage() {
        session_start();
        $chat = new Chat();
        $message = $_POST['pesan'];
        $username = $_SESSION['username'];
        echo json_encode($chat->addMessage($message, $username));
        return;
    }
}