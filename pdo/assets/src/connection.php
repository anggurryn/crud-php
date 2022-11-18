<?php

$dbName = 'learnCrud';
$host = 'localhost';
$user = 'ryn';
$password = 'Skuyb4ng';
$opt = [];

$db = "mysql:host = $host;dbname = $dbName";


$conn = new PDO($db, $user, $password, $opt);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo 'oke';
