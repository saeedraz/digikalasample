<?php
$host="localhost";
$username="root";
$password="";
$dbname="digikala";
$connect=new PDO("mysql:host=".$host.";dbname=".$dbname,$username,$password);
$connect->exec("set names utf8");
?>