<?php

$host = 'localhost';
$user = 'ryn';
$pass = 'Skuyb4ng';
$db = 'learnCrud';

$dsn = "mysql:host=$host; dbname=$db";
try{
    $con = new PDO($dsn,$user,$pass);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $error){
    echo $error->getMessage();
}