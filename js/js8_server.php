<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        $file = './addresses.json';
        $json = file_get_contents($file); 
        print($json);
    }
?>