<?php include './include/sidebar.php' ?>
<div class="col py-3">
    <h1 class="text-center text-capitalize">Quản lý Phim</h1>
    <a href="addfilm.php" type="button" class="btn btn-primary mb-2">Thêm Phim</a>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <td>STT</td>
                <td>Tên Phim</td>
                <td>Thể loại</td>
                <td>Poster</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM tbl_film ";
            $res = mysqli_query($conn, $sql);
            $sn = 1;
            foreach ($res as $value) {
            ?>
            <tr>
                <td><?php echo $sn++ ?></td>
                <td><?php echo $value['name_film'] ?></td>
                <td><?php echo $value['film_genre'] ?></td>
                <td>
                    <?php
                        if ($value['film_img'] == "") {
                            echo "Không có ảnh";
                        } else {
                        ?>
                    <img src="./image/<?php echo $value['film_img']; ?>" width="80px">
                    <?php
                        }
                        ?>
                </td>
                <td style="width: 200px">
                    <button style="border: none"><a class="btn btn-danger"
                            href="deletefilm.php?id_film=<?php echo $value['id_film']; ?>"><i
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