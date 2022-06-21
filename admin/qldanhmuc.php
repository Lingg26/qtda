<?php include './include/sidebar.php' ?>
<div class="col py-3">
    <h1 class="text-center text-capitalize">Quản lý danh mục</h1>
    <a href="adddanhmuc.php" type="button" class="btn btn-primary mb-2">Thêm Danh Mục</a>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <td>STT</td>
                <td>Tên danh mục</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM tbl_category";
            $res = mysqli_query($conn, $sql);
            $sn = 1;
            foreach ($res as $value) {
            ?>
            <tr>
                <td><?php echo $sn++ ?></td>
                <td><?php echo $value['name'] ?></td>
                <td style="width: 200px">
                    <button style="border: none"><a class="btn btn-danger"
                            href="deletedanhmuc.php?id_cat=<?php echo $value['id_cat']; ?>"><i
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