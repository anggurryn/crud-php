<?php

require_once './../conn.php';
$message = '';
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $born = $_POST['born'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $pass = $_POST['password'];

    $sql = "insert into user(nama,email,mobile,born,alamat,gender,password)
values('$nama','$email','$mobile','$born','$alamat','$gender','$pass')";

    $stmt = $con->prepare($sql);

    if ($stmt->execute()) {
        // header('location: ./../../../index.php');
        $message = 'nambah';
    }
}