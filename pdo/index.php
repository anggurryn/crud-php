<?php

require_once './assets/src/connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <title>Learning Crud</title>
</head>
<body>
<?php require_once './assets/src/__head.php' ?>

<h1>Home</h1>
<a class="link" href="./assets/src/addUser.php">add</a>
<a class="link" href="./assets/src/view.php">view</a>

<?php require_once './assets/src/__footer.php' ?>
</body>
</html>