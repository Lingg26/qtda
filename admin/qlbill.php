<?php include './include/sidebar.php' ?>
<div class="col py-3">
    <h1 class="text-center text-capitalize">Quản lý Hóa Đơn</h1>
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <td>STT</td>
                <td>Tên Khách Hàng</td>
                <td>Tên Phim</td>
                <td>Tổng Tiền</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT tbl_customer.fullname,tbl_film.name_film,tbl_bill.total FROM tbl_showtime,tbl_bill,tbl_film,tbl_customer WHERE tbl_bill.id_cus=tbl_customer.id_cus and tbl_bill.id_st=tbl_showtime.id_st and tbl_showtime.id_film=tbl_film.id_film";
            $res = mysqli_query($conn, $sql);
            $sn = 1;
            foreach ($res as $value) {
            ?>
            <tr>
                <td><?php echo $sn++ ?></td>
                <td><?php echo $value['fullname'] ?></td>
                <td><?php echo $value['name_film'] ?></td>
                <td><?php echo $value['total'] ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<?php include '../admin/include/footer.php' ?>