<?php include './include/sidebar.php' ?>

<div class="col py-3">
    <h1 class="text-center text-capitalize">Thêm Danh Mục</h1>
    <a href="qldanhmuc.php" type="button" class=" btn btn-danger mb-2">Quay lại</a>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group mt-2">
            <label for="exampleInputEmail1" class="mb-2 text-capitalize">Tên danh mục</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Nhập tên danh mục">
        </div>
        <button type="submit" name="submit" class="float-right btn btn-primary mt-2">Thêm</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $sql = "INSERT INTO tbl_category SET 
        name= '$name'
        ";
        $res = mysqli_query($conn, $sql);
        if ($res === true) {
            echo "<script>window.location.href='qlfilm.php';</script>";
        }
    }
    ?>
</div>
<?php include '../admin/include/footer.php' ?>