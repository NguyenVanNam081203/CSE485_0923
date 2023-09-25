<?php
    $host = "localhost";
    $username = "root";
    $password = "123";
    $datavase = "btth01_cse485";
    try{
        $connect = new PDO('mysql:host=localhost;dbname=btth01_cse485','root','123');
    }
    catch(PDOException $e){
        echo "Connection failed becase : " . $e -> getMessage();
    }
?>