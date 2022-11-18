<?php

require_once 'connection.php';

$sql = 'select * from user';
$conn->query('use learnCrud')->execute();

$statement = $conn->prepare($sql);

// $statement->execute();
$users = $statement->fetchAll(PDO::FETCH_OBJ);

foreach ($users as $user) {
    echo $user->id;
    echo $user->nama;
    echo $user->alamat;
    echo $user->gender;
    echo $user->email;
    echo $user->mobile;
    echo $user->born;
}

?>