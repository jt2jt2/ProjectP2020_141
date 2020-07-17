<?php
       ini_set( 'display_errors', 1 );
       error_reporting(E_ALL);
    if($_SERVER['REQUEST_METHOD'] == 'GET'&&$_GET['check']=="false") {
        $name =  $_GET['name'];
        $address = $_GET['address'];
        $phone = $_GET['phone'];
        $email =  $_GET['email'];
        $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $address = htmlspecialchars($address, ENT_QUOTES, 'UTF-8');
        $phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

        try{
            $username = "c0118141";
            $password = "password";
            $pdo = new PDO(
            'mysql:host=localhost;dbname=address_book; port=8888;
            charset=utf8', $username, $password);
            $sth = $pdo->prepare('SELECT *
            FROM addresses
            WHERE name  = ? AND address = ? AND phone = ? AND email = ?');
            $sth->execute(array($name,$address,$phone,$email));
            $results = $sth->fetchAll();
            $addressJSON = json_encode($results,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
            print($addressJSON);
        } catch (PDOException $e) {
            var_dump($e);
        }
    }else if($_SERVER['REQUEST_METHOD'] == 'GET'&&$_GET['check']=="true") {
        $name =  $_GET['name'];
        $address = $_GET['address'];
        $phone = $_GET['phone'];
        $email =  $_GET['email'];
        $id = $_GET['id'];
        $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $address = htmlspecialchars($address, ENT_QUOTES, 'UTF-8');
        $phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        $id = htmlspecialchars($id, ENT_QUOTES, 'UTF-8');

        $id = (int)$id;
        try{
            $username = "c0118141";
            $password = "password";
            $pdo = new PDO(
            'mysql:host=localhost;dbname=address_book; port=8888;
            charset=utf8', $username, $password);
            $sth = $pdo->prepare('UPDATE addresses 
            SET name  = ?, address = ?, phone = ?, email = ?
            WHERE id = ?');
            $sth->execute(array($name,$address,$phone,$email,$id));
            $results = $sth->fetchAll();
            
            print($name.$address.$email.$phone.$id);
        } catch (PDOException $e) {
            var_dump($e);
        }
    }
?>