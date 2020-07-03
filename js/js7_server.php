<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        $message =  $_GET['message'];
        $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
        print($message."が送られました。");
    }
?>