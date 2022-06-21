<?php include './include/sidebar.php' ?>

<div class="col py-3">
    <h1 class="text-center text-capitalize">Thêm Người Dùng</h1>
    <a href="qlphong.php" type="button" class=" btn btn-danger mb-2">Quay lại</a>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group mt-2">
            <label for="exampleInputEmail1" class="mb-2 text-capitalize">Tên phòng</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name_room"
                placeholder="Nhập tên phòng">
        </div>
        <div class="form-group mt-2">
            <label for="exampleInputEmail1" class="mb-2 text-capitalize">Hiển thị</label>
            <select name="active" class="form-control">
                <option value="Yes">Hiển Thị</option>
                <option value="No">Không Hiển Thị</option>
            </select>
        </div>
        <button type="submit" name="submit" class="float-right btn btn-primary mt-2">Thêm</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $name_room = $_POST['name_room'];
        if (isset($_POST['active'])) {
            $active = $_POST['active'];
        } else {
            $active = "No";
        }
        $sql = "INSERT INTO tbl_room SET 
        name_room= '$name_room',
        active= '$active'
        ";
        $res = mysqli_query($conn, $sql);
        if ($res === true) {
            echo "<script>window.location.href='qlphong.php';</script>";
        }
    }
    ?>
</div>
<?php include '../admin/include/footer.php' ?>