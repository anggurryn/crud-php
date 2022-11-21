<?php require_once './_header.php'; ?>
<?php
require_once './../conn.php';
$id = $_GET['id'];
$sql = "select * from user where id = $id";

$stmt = $con->prepare($sql);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_OBJ);
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $born = $_POST['born'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $pass = $_POST['password'];

    $sql = "update user set nama = '$nama',email = '$email',mobile = '$mobile',born = '$born',alamat = '$alamat',gender = '$gender',password = '$password' where id = $id";
    $stmt = $con->prepare($sql);

    if ($stmt->execute()) {
        header('location: ./view.php');
        
    }
    unset($stmt);
    unset($con);
}
?>
<h2>edit</h2>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Edit User</h2>
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
                    <input value="<?= $user->nama; ?>" type="text" name="nama" id="nama" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="email">Email</label>
                    <input value="<?= $user->email; ?>" type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="mobile">Mobile</label>
                    <input value="<?= $user->mobile; ?>" type="number" name="mobile" id="mobile" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="born">Date of Birth</label>
                    <input value="<?= $user->born; ?>" required type="date" name="born" id="born" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="alamat">Alamat</label>
                    <input value="<?= $user->nama; ?>" type="text" name="alamat" id="alamat" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="password">Password</label>
                    <input value="<?= $user->password; ?>" type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="pria"><input required type="radio" name="gender" id="pria" value="pria">Pria</label>
                    <label for="wanita"><input required type="radio" name="gender" id="wanita" value="wanita">Wanita</label>
                </div>
                <input type="submit" name="submit" value="Sign Up" class="btn btn-primary my-3">
            </form>
        </div>
    </div>
</div>

<?php require_once './_footer.php'; ?>