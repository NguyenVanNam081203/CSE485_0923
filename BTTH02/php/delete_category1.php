<?php

    if(isset($_GET['Id'])){
        $Id = $_GET['Id'];
        $conn = new PDO("mysql:host = localhost;dbname=btt01b", "root", "1234");
        $sql = "DELETE FROM theloai WHERE ma_tloai = $Id;";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        
        header('location:category.php');
    }
?>
<!-- 
<?php
    if(isset($_GET['Id'])){
        $Id = $_GET['Id'];
    }

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=btt01b", "root", "1234");
        //Buoc 2: Thuc hien truy van
        $sql = "DELETE FROM theloai WHERE ma_tloai = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        $rowCount = $stmt->rowCount();
        if($rowCount>0){
//            echo "Deleted $rowCount row(s).";
            header("Location: category.php?success=$id");
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }

?> -->