<?php require_once './_header.php'; ?>
<?php
require_once './../conn.php';

$sql = "select * from user";
$stmt = $con->prepare($sql);
$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_OBJ);

?>

<div class="container-lg">
    <div class="card mt-4">
        <div class="card-header">
            <h2>All User</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?= $user->nama; ?></td>
                            <td><?= $user->email; ?></td>
                            <td><?= $user->alamat; ?></td>
                            <td>
                                <a href="./edit.php?id=<?= $user->id; ?>" class="btn btn-primary btn-sm">Update</a>
                                <a onclick="return confirm('are you serious??')" href="./delete.php?id=<?= $user->id; ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </table>
            </div>
        </div>
    </div>
</div>
<?php require_once './_footer.php'; ?>