<?php include('./public/header.php') ?>
<div class="slider">
    <div class="slider_main">
        <div class="slider-list">
            <?php
            $sql = "SELECT * from tbl_film where active='yes' and id_cat=1";
            $res = mysqli_query($conn, $sql);
            foreach ($res as $value) {
            ?>
            <div class="slider-list-item">
                <img src="./admin/image/<?php echo $value['img_banner'] ?>" alt="" class="slider_img">
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<div class="menu_movie">
    <div class="container">
        <div class="menu_movie-tittle">PHIM ĐANG CHIẾU</div>
        <div class="list_movie">
            <?php
            $sql = "SELECT * FROM tbl_film where id_cat=1";
            $res = mysqli_query($conn, $sql);
            foreach ($res as $value) {
            ?>
            <div class="list_movie-item">
                <a href="ctfilm.php?id_film=<?php echo $value['id_film'] ?>" class="movie_link">
                    <img src="./admin/image/<?php echo $value['film_img'] ?>" alt="" class="movie_img">
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
<div class="menu_top5">
    <div class="container">
        <div class="menu_top5-tittle">TOP 5 PHIM ĐƯỢC XEM NHIỀU NHẤT</div>
        <div class="list_top5">
            <?php
            $sql4 = "SELECT * FROM tbl_showtime,tbl_film, tbl_bill WHERE tbl_showtime.id_st=tbl_bill.id_st and tbl_showtime.id_film=tbl_film.id_film GROUP BY tbl_film.id_film ORDER BY SUM(tbl_bill.TOTAL) DESC LIMIT 5 ";
            $res = mysqli_query($conn, $sql4);
            foreach ($res as $value) {
            ?>
            <div class="list_top5-item">
                <a href="ctfilm.php?id_film=<?php echo $value['id_film'] ?>" class="movie_link">
                    <img src="./admin/image/<?php echo $value['film_img'] ?>" alt="" class="movie_top5-img">
                    <div class="movie_tittle" style="height: 40px;text-align:center"><?php echo $value['name_film'] ?>
                    </div>
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
<hr>
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
<hr>
<span class="text-bottom">Copyright © 2022. All Rights Reserved By ThuyLinh</span>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="./index.js"></script>
</body>

</html>