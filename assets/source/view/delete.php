<?php require_once './_header.php'; ?>

<?php
require_once './../conn.php';
$id = $_GET['id'];

$sql = "delete from user where id = $id";
$stmt = $con->prepare($sql);

if($stmt->execute()){
    header('location: ./view.php');
}
?>
<h2>delete</h2>

<?php require_once './_footer.php'; ?>