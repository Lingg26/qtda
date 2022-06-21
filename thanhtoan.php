<?php include('./public/header.php') ?>
<?php
$id_lc = $_SESSION['id_st'];
$id_view1 = $_SESSION['id_view'];
$seat = $_GET['seat'];
?>
<div class="payment_main">
    <div class="container">
        <form method="POST">
            <div class="payment_content">
                <div class="login__form-content">
                    <?php
                    if (isset($_SESSION['id_cus'])) {
                        $id = $_SESSION['id_cus'];
                        $sql = "SELECT * from tbl_customer where id_cus=$id";
                        $res = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($res);
                        if ($count > 0) {
                            $row_data = mysqli_fetch_array($res);
                    ?>
                    <h2 style="text-align: center">THÔNG TIN KHÁCH HÀNG</h2>
                    <input class="login__form-content-input" type="text" name="tenkhachhang"
                        placeholder="<?php echo $row_data['fullname'] ?>" id="">
                    <input class="login__form-content-input" type="text" name="email"
                        placeholder="<?php echo $row_data['email'] ?>" id="">
                    <input class="login__form-content-input" type="text" name="sdt"
                        placeholder="<?php echo $row_data['phonenumber'] ?>" id="">
                    <?php
                        }
                    } else {
                        echo '<script>alert("Bạn chưa đăng nhập!")</script>';
                        header('location: login.php');
                    }
                    ?>

                </div>
                <div class="receipt_content">
                    <h2 style="text-align: center">THANH TOÁN</h2>

                    <table style="width:100%;margin:20px 120px">
                        <thead style="font-size: 20px;">
                            <tr>
                                <td>Số Ghế</td>
                                <td>Tổng tiền</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="info-seat"> <?php echo $_GET['seat'] ?></td>
                                <td><?php echo number_format($_GET['price'])  ?></td>
                            </tr>
                            <div class="input_info-seat"></div>
                        </tbody>
                    </table>
                    <button type=" submit" name="submit" class="btn_receipt">Thanh toán</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<?php
if (isset($_POST['submit'])) {
    $total = $_GET['price'];
    $seat = $_GET['seat'];
    $arr = explode(',', $seat);
    $id_bill = rand(0, 2000);
    $sql = "INSERT INTO tbl_bill SET
        id_cus=$id,
        id_st=$id_lc,
        total=$total,
        id_bdt=$id_bill
        ";
    $res = mysqli_query($conn, $sql);
    foreach ($arr as $key => $arr) {
        $sql2 = "INSERT INTO tbl_billdetail SET id_bdt=$id_bill, id_chair='$arr' ";
        $res2 = mysqli_query($conn, $sql2);
        $sql3 = "UPDATE st_$id_view1 SET active_$id_view1='Yes' where id_chair='$arr' ";
        $res3 = mysqli_query($conn, $sql3);
    }
    if ($res == true) {
        echo "<script>window.location.href='trangchu.php';</script>";
    }
}
?>
<script>
const infoseat = document.querySelector(".info-seat");
const text = infoseat.innerText;
const checkoutSeat = text.split(",");
for (i = 0; i < checkoutSeat.length; i++) {
    document.querySelector(".input_info-seat").innerHTML += '<input type="hidden" name="' + checkoutSeat[i] +
        '" value= "' + checkoutSeat[i] + '">';
}
</script>
<footer>
    <div class="container">
        <div class="footer_main">
            <div class="footer_list">
                <div class="footer_list-tittle">điều khoản sử dụng</div>
                <div class="list_footer">
                    <div class="list_footer-item">
                        <a href="" class="footer-item-link">Điều Khoản Chung</a>
                    </div>
                    <div class="list_footer-item">
                        <a href="" class="footer-item-link">Điều Giao Dịch</a>
                    </div>
                    <div class="list_footer-item">
                        <a href="" class="footer-item-link">Chính Sách Thanh Toán</a>
                    </div>
                    <div class="list_footer-item">
                        <a href="" class="footer-item-link">Chính Sách Bảo Mật</a>
                    </div>
                    <div class="list_footer-item">
                        <a href="" class="footer-item-link">Câu Hỏi Thường Gặp</a>
                    </div>
                </div>
            </div>
            <div class="footer_list">
                <div class="footer_list-tittle"> kết nối với chúng tôi </div>
                <div class="connect">
                    <img src="../img/bg-social-footer-40.png" alt="" class="social-img">
                </div>
                <div class="logo-bct">
                    <img src="../img/cong-thuong.png" alt="" class="logo-bct-img">
                </div>
            </div>
            <div class="footer_list">
                <div class="footer_list-tittle">chăm sóc khách hàng</div>
                <div class="list_footer">
                    <div class="list_footer-item">
                        <a href="" class="footer-item-link">Hotline: 1900 xxxx</a>
                    </div>
                    <div class="list_footer-item">
                        <a href="" class="footer-item-link">Giờ làm việc: 8:00 - 22:00</a>
                    </div>
                    <div class="list_footer-item">
                        <a href="" class="footer-item-link">Email hỗ trợ: hoidap@tl.vn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>