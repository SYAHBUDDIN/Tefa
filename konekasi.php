<?php 

 $db_host = "localhost";
 $db_user = "root";
 $db_password = "";
 $db_name = "db_eccomerce";

 try {
    $database = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
 }catch(PDOException $error) {
    die("ada yg masalah: ". $error->getMessege());
 }

?>