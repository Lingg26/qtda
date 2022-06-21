<?php include './include/sidebar.php' ?>
<div class="col py-3">
    <h1 class="text-center text-capitalize">Quản lý Lịch Chiếu</h1>
    <a href="addlc.php" type="button" class="btn btn-primary mb-2">Thêm Lịch Chiếu</a>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <td>STT</td>
                <td>Tên phim</td>
                <td>Phòng</td>
                <td>Ngày Chiếu</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT tbl_film.name_film, tbl_room.name_room, tbl_showtime.datetime,tbl_showtime.id_st from tbl_showtime, tbl_room,tbl_film WHERE tbl_showtime.id_film= tbl_film.id_film and tbl_showtime.id_room= tbl_room.id_room;";
            $res = mysqli_query($conn, $sql);
            $sn = 1;
            foreach ($res as $value) {
            ?>
            <tr>
                <td><?php echo $sn++ ?></td>
                <td><?php echo $value['name_film'] ?></td>
                <td><?php echo $value['name_room'] ?></td>
                <td><?php echo $value['datetime'] ?></td>
                <td style="width: 200px">
                    <button style="border: none"><a class="btn btn-danger"
                            href="deletelc.php?id_lc=<?php echo $value['id_st']; ?>"><i
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