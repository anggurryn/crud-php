<?php require './__head.php' ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Add a user</h2>
        </div>
        <div class="card-body">
            <?php if (!empty($message)) : ?>
                <div class="alert alert-succes">
                    <?= $message ?>
                </div>
            <?php endif; ?>
            <form method="post">
                <div class="form-group m-2">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                </div>
                <div class="form-group m-2">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group m-2">
                    <label for="mobile">Mobile</label>
                    <input type="number" name="mobile" id="mobile" class="form-control">
                </div>
                <div class="form-group m-2">
                    <label for="born">Born</label>
                    <input type="date" name="born" id="born" class="form-control">
                </div>
                <div class="form-group m-2">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control">
                </div>
                <div class="form-group m-2">
                    <label for="">Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" value="pria" type="radio" name="gender" id="pria">
                        <label class="form-check-label" for="pria">Pria</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="wanita" type="radio" name="gender" name="gender" id="wanita">
                        <label class="form-check-label" for="wanita">Wanita</label>
                    </div>
                </div>
                <div class="form-group m-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <button class="btn btn-primary m-2" type="submit" name="submit">Create</button>
            </form>
        </div>
    </div>
</div>

<a href="../../index.php">home</a>

<?php require './__footer.php' ?>

<?php
require_once './connection.php';
$message = '';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $born = $_POST['born'];
    $passwd = $_POST['password'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];

    echo $born;

    $sql = 'insert into user(
        nama,email,mobile,born,alamat,gender,password
    ) values(
        :nama,:email,:mobile,:born,:alamat,:gender,:password
    )';


    $stmt = $conn->prepare($sql);
    if ($stmt->execute(array(
        ':nama' => $nama,
        ':email' => $email,
        ':mobile' => $mobile,
        ':born' => $born,
        ':alamat' => $alamat,
        ':gender' => $gender,
        ':password' => $passwd

    ))) {
        $message = 'User berhasil dibuat';
    }
}

?>