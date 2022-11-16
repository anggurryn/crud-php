<?php require_once './__head.php' ?>
<form action="post" class="container form">
    <table class=" table table-borderless">
        <tr>
            <td>Name</td>
            <td><input type="text" name="nama" id="nama" class="form-control"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" id="email" class="form-control"></td>
        </tr>
        <tr>
            <td>Mobile Number</td>
            <td><input type="number" name="mobile" id="mobile" class="form-control"></td>
        </tr>
        <tr>
            <td>Date of birth</td>
            <td></label><input type="date" name="born" id="born" class="form-control"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <label for="pria"><input type="radio" name="gender" id="pria" value="pria"">Pria</label>
                <label for="wanita"><input type="radio" name="gender" id="wanita" value="wanita"">Wanita</label>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" id="alamat" class="form-control"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="password" id="password" class="form-control"></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit" class="btn btn-primary">Sign Up</button></td>
        </tr>
    </table>
</form>
<a href="../../index.php">home</a>
<?php require_once './__footer.php' ?>
<?php

if (null !== 'submit'){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $born = $_POST['born'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];

    echo $nama;
}

?>