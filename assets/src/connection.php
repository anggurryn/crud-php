<?php

$dbName = 'learnCrud';
$host = 'localhost';
$user = 'ryn';
$password = 'Skuyb4ng';

$db = "mysql:host = $host;dbname = $dbName";

try{
    $conn = new PDO($db,$user,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $error){
    $error->getMessage();
}

 
?>