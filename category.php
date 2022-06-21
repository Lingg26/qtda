<?php include('./public/header.php') ?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_category WHERE id_cat='$id'";
$res = mysqli_query($conn, $sql);
foreach ($res as $value) {
?>
<div class="category_main">
    <div class="container">
        <div class="category_content-main">
            <div class="category_tittle"> <?php echo $value['name']; ?></div>
            <hr style="color: white;">
            <div class="category_list">
                <?php
                    $sql = "SELECT * FROM tbl_film where id_cat=$id";
                    $res = mysqli_query($conn, $sql);
                    foreach ($res as $value) {
                    ?>
                <div class="category_list-item">
                    <a href="ctfilm.php?id_film=<?php echo $value['id_film'] ?>" class="movie_link">
                        <img src="./admin/image/<?php echo $value['film_img'] ?>" alt="" class="category_list-item-img">
                        <div class="movie_tittle"><?php echo $value['name_film'] ?></div>
                        <div class="movie_type">
                            <div class="movie_type-item"><?php echo $value['film_genre'] ?></div>
                        </div>
                    </a>
                </div>
                <?php
                    }
                    ?>
            </div>
        </div>
    </div>
</div>
<?php
}
?>
<br>
<hr style="margin-top: 30px;">
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
                        <a href="" class="footer-item-link">Email hỗ trợ: hoidaptl@.vn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>


</html>