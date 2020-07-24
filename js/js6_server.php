<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $message =  $_POST['message'];
        $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
        print($message."が送られました。");
    }
?>