<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET') {
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

            $sql = "INSERT INTO addresses(name, address, phone, email)
            VALUES(?, ?, ?, ?)";
            $prepared = $pdo->prepare($sql);
            $param = array($name, $address,$phone,$email);
            $prepared -> execute($param);
            print("insert data");
            //$statement = $pdo->query("SELECT * FROM addresses");
            //$results = $prepared->fetchAll();
            //$addressJSON = json_encode($results,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
            //print($addressJSON);
        } catch (PDOException $e) {
            var_dump($e);
        }
        
    }
?>