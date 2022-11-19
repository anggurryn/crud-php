<?php require_once './_header.php'; ?>
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
        $message = 'succes to insert new user';
    }
    unset($stmt);
    unset($con);
}
?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Add User</h2>
        </div>
        <div class="card-body">
            <?php if (!empty($message)) : ?>
                <div class="alert alert-success" role="alert">
                    <?= $message ?>
                </div>
            <?php endif; ?>
            <form method="POST">
                <div class="form-group mt-3">
                    <label for="nama">Nama</label>
                    <input required type="text" name="nama" id="nama" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="email">Email</label>
                    <input required type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="mobile">Mobile</label>
                    <input required type="number" name="mobile" id="mobile" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <p>Jenis Kelamin</p>
                    <label for="pria"><input required type="radio" name="gender" id="pria" value="pria">Pria</label>
                    <label for="wanita"><input required type="radio" name="gender" id="wanita" value="wanita">Wanita</label>
                </div>
                <div class="form-group mt-3">
                    <label for="born">Date of Birth</label>
                    <input required type="date" name="born" id="born" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="alamat">Alamat</label>
                    <input required type="text" name="alamat" id="alamat" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="password">Password</label>
                    <input required type="password" name="password" id="password" class="form-control">
                </div>
                <input type="submit" name="submit" value="Sign Up" class="btn btn-primary my-3">
            </form>
        </div>
    </div>
</div>

<?php require_once './_footer.php'; ?>