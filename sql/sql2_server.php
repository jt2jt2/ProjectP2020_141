<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        ini_set( 'display_errors', 1 );
        error_reporting(E_ALL);
        try{
            $username = "c0118141";
            $password = "password";
            $pdo = new PDO(
            'mysql:host=localhost;dbname=address_book; port=8888;
            charset=utf8', $username, $password);
            $statement = $pdo->query("SELECT * FROM addresses");
            $results = $statement->fetchAll();
            $addressJSON = json_encode($results,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
            print($addressJSON);
        } catch (PDOException $e) {
            var_dump($e);
        }
    }
?>
