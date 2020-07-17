<?php
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

        $id = $_GET['id'];
        $id = htmlspecialchars($id, ENT_QUOTES, 'UTF-8');

        $id = (int)$id;
        try{
            
            $username = "c0118141";
            $password = "password";
            $pdo = new PDO(
            'mysql:host=localhost;dbname=address_book; port=8888;
            charset=utf8', $username, $password);
            $sth = $pdo->prepare('DELETE FROM addresses WHERE id = ?');
            $sth->execute(array($id));
            $results = $sth->fetchAll();
            print("削除しました！");
        } catch (PDOException $e) {
            var_dump($e);
        }
    }
?>