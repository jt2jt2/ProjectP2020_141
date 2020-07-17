<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET'&&$_GET['name']!=null) {
        $name =  $_GET['name'];
 
        $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');

        try{
            $username = "c0118141";
            $password = "password";
            $pdo = new PDO(
            'mysql:host=localhost;dbname=address_book; port=8888;
            charset=utf8', $username, $password);
            $sth = $pdo->prepare('SELECT *
            FROM addresses
            WHERE name  = ?');
            $sth->execute(array($name));
            $results = $sth->fetchAll();
            $addressJSON = json_encode($results,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
            print($addressJSON);
        } catch (PDOException $e) {
            var_dump($e);
        }
        
    }
?>