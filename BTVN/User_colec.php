<?php
$host="localhost";
$username="root";
$password="123"; 
$database="account";
$connect=mysqli_connect($host,$username,$password,$database);
if($connect->connect_error){
    die("Kết nối thất bại : ".$connect->connect_error);
}
?>