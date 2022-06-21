<?php include './include/sidebar.php' ?>

<div class="col py-3">
    <h1 class="text-center text-capitalize">Thêm Người Dùng</h1>
    <a href="qluser.php" type="button" class=" btn btn-danger mb-2">Quay lại</a>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group mt-2">
            <label for="exampleInputEmail1" class="mb-2 text-capitalize">Tên đăng nhập</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="user"
                placeholder="Nhập tên đăng nhập">
        </div>
        <div class="form-group mt-2">
            <label for="exampleInputEmail1" class="mb-2 text-capitalize">Passwword</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="password" placeholder="Nhập mật khẩu">
        </div>
        <button type="submit" name="submit" class="float-right btn btn-primary mt-2">Thêm</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $user = $_POST['user'];
        $password = $_POST['password'];
        $sql = "INSERT INTO tbl_user SET 
        user= '$user',
        password= '$password'
        ";
        $res = mysqli_query($conn, $sql);
        if ($res === true) {
            echo "<script>window.location.href='qluser.php';</script>";
        }
    }
    ?>
</div>
<?php include '../admin/include/footer.php' ?>