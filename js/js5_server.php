<?php
    $message =  $_GET['message'];
    $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    print($message."が送られました。");
    $file = './addresses.json';
    $json = file_get_contents($file); 
    var_dump($json);
?>