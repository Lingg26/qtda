<?php include './include/sidebar.php' ?>
<div class="col py-3">
    <h1 class="text-center text-capitalize">Quản lý Phòng</h1>
    <a href="addphong.php" type="button" class="btn btn-primary mb-2">Thêm Phòng</a>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <td>STT</td>
                <td>Tên phòng</td>
                <td>Trạng thái</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM tbl_room";
            $res = mysqli_query($conn, $sql);
            $sn = 1;
            foreach ($res as $value) {
            ?>
            <tr>
                <td><?php echo $sn++ ?></td>
                <td><?php echo $value['name_room'] ?></td>
                <td><?php echo $value['active'] ?></td>
                <td style="width: 200px">
                    <button style="border: none"><a class="btn btn-danger"
                            href="deletephong.php?id_room=<?php echo $value['id_room']; ?>"><i
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