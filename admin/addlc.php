<?php include './include/sidebar.php' ?>
<div class="col py-3">
    <h1 class="text-center text-capitalize">Thêm Phim</h1>
    <a href="qllichchieu.php" type="button" class=" btn btn-danger mb-2">Quay lại</a>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group mt-2">
            <label class="mb-1" for="exampleInputEmail1">Tên phim</label>
            <select name="film" class="form-control ">
                <?php
                $sql = "SELECT * FROM tbl_film where active='yes'";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);
                if ($count > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        $id_film = $row['id_film'];
                        $name = $row['name_film'];
                ?>
                <option value="<?php echo $id_film; ?>"><?php echo $name; ?></option>
                <?php
                    }
                } else {
                    ?>
                <option value="0">Không tìm thấy danh sách phim</option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group mt-2">
            <label class="mb-1" for="exampleInputEmail1">Phòng</label>
            <select name="room" class="form-control ">
                <?php
                $sql = "SELECT * FROM tbl_room where active='yes'";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);
                if ($count > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        $id_room = $row['id_room'];
                        $name = $row['name_room'];
                ?>
                <option value="<?php echo $id_room; ?>"><?php echo $name; ?></option>
                <?php
                    }
                } else {
                    ?>
                <option value="0">Không tìm thấy danh sách phòng</option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group mt-2">
            <label class="mb-1" for="exampleInputEmail1">Ngày Giờ chiếu</label>
            <input type="datetime-local" class="form-control" id="exampleInputEmail1" name="datetime">
        </div>
        <button type="submit" name="submit" class="float-right btn btn-primary mt-2 mb-2">Thêm</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $number = 0;
        $id_film = $_POST['film'];
        $id_room = $_POST['room'];
        $date = $_POST['datetime'];
        $id_view = $id_film . $id_room . strtotime($date);
        $sql2 = "SELECT * FROM tbl_showtime";
        $res2 = mysqli_query($conn, $sql2);
        foreach ($res2 as $value2) {
            if (strtotime($value2['datetime']) <= strtotime($date) && strtotime($date)  <= strtotime(date('Y-m-d H:i:s', strtotime('+3 hour', strtotime($value2['datetime'])))) && $value2['id_room'] == $id_room) {
                $number++;
            }
        }
        if ($number > 0) {
            echo '<script>alert("Phòng đã được sử dụng trong thời gian này")</script>';
        } else {
            $sql = " INSERT INTO tbl_showtime SET
        id_film='$id_film',
        id_room='$id_room',
        datetime='$date',
        id_view='$id_view'";
            $res = mysqli_query($conn, $sql);
            $sql2 = "ALTER TABLE tbl_chair ADD active_$id_view varchar(255) not null default('No')";
            $res2 = mysqli_query($conn, $sql2);
            $sql1 = "CREATE VIEW st_$id_view
        as select id_chair, active_$id_view from tbl_chair
 ";
            $res1 = mysqli_query($conn, $sql1);
            if ($res === true && $res1 === true && $res2 === true) {
                echo "<script>window.location.href='qllichchieu.php';</script>";
            }
        }
    }
    ?>
</div>