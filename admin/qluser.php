<?php include './include/sidebar.php' ?>
<div class="col py-3">
    <h1 class="text-center text-capitalize">Quản lý User</h1>
    <a href="adduser.php" type="button" class="btn btn-primary mb-2">Thêm User</a>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <td>STT</td>
                <td>Tên đăng nhập</td>
                <td>Mật Khẩu</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM tbl_user";
            $res = mysqli_query($conn, $sql);
            $sn = 1;
            foreach ($res as $value) {
            ?>
            <tr>
                <td><?php echo $sn++ ?></td>
                <td><?php echo $value['user'] ?></td>
                <td><?php echo $value['password'] ?></td>
                <td style="width: 200px">
                    <button style="border: none"><a class="btn btn-primary"
                            href="updateuser.php?id=<?php echo $value['id']; ?>"><i
                                class="far fa-edit"></i></a></button>
                    <button style="border: none"><a class="btn btn-danger"
                            href="deleteuser.php?id=<?php echo $value['id']; ?>"><i
                                class="far fa-trash-alt"></i></a></button>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<?php include '../admin/include/footer.php' ?>