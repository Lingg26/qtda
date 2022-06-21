<?php include('./public/header.php') ?>
<?php
$id = $_GET['id_film'];
$sql = "SELECT * FROM tbl_film WHERE id_film='$id' and active='yes' ";
$res = mysqli_query($conn, $sql);
foreach ($res as $value) {
?>
<div class="banner_film">
    <img src="./admin/image/<?php echo $value['img_banner'] ?>" alt="" class="banner_film-img">
</div>
<div class="film_content">
    <div class="container">
        <div class="film_content-main">
            <div class="film_content-left">
                <div class="film_content-img">
                    <img src="./admin/image/<?php echo $value['film_img'] ?>" alt="" class="film_main-img">
                    <div class="button-booking">
                        <button class="booking-ticket" id="openOverlay">MUA VÉ</button>
                        <div id="backgroundOverlay"></div>
                        <div id="popup">
                            <div class="showtime">
                                <div class="showtime_day">
                                    <ul class="day_list">
                                        <?php
                                            $sql1 = "SELECT * FROM tbl_showtime where id_film =$id and  datetime >= CURDATE() GROUP BY  date_format(datetime, '%m/%d/%Y' )";
                                            $res1 = mysqli_query($conn, $sql1);
                                            foreach ($res1 as $value1) {
                                            ?>
                                        <li class="day_item" data-id="<?php echo $value1['id_film'] ?> "
                                            data-value="<?php echo strtotime($value1['datetime']) ?>">
                                            <?php echo date("d-m", strtotime($value1['datetime'])) ?></li>
                                        <?php
                                            }
                                            ?>

                                    </ul>
                                </div>
                                <div class="tabcontent">
                                    <div class="type_room">Rạp 2D</div>
                                    <div id="showtime_list">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="film_content-right">
                <div class="movie-name"><?php echo $value['name_film'] ?></div>
                <div class="inf-title">Đạo diễn: <div class="director-name"><?php echo $value['name_director'] ?></div>
                </div>
                <div class="inf-title"><span style="width:150px">Diễn viên:</span>
                    <div class="actors-name"><?php echo $value['name_actor'] ?></div>
                </div>
                <div class="inf-title">Thể loại:<div class="movie-genre"><?php echo $value['film_genre'] ?></div>
                </div>
                <div class="inf-title">Khởi chiếu: <div class="premiere-date">
                        <?php echo date("d-m-Y", strtotime($value['premiere_date'])) ?>
                    </div>
                </div>
                <div class="inf-title">Thời lượng: <div class="movie-time"><?php echo $value['film_time'] ?> phút</div>
                </div>
                <div class="inf-title">Rated: <div class="movie-rate"><?php echo $value['film_rate'] ?></div>
                </div>
            </div>
        </div>
        <div class="film_intro">
            <div class="film_intro-title">GIỚI THIỆU</div>
            <div class="intro-content"><?php echo $value['film_intro'] ?></div>
            <div class="film_intro-trailer">TRAILER</div>
            <iframe width="956" height="538" src="<?php echo $value['film_trailer'] ?>" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
</div>
<?php
}
?>
</div>
<script>
window.onload = function() {
    var popup = document.getElementById('popup');
    var overlay = document.getElementById('backgroundOverlay');
    var openButton = document.getElementById('openOverlay');
    document.onclick = function(e) {
        if (e.target.id == 'backgroundOverlay') {
            popup.style.display = 'none';
            overlay.style.display = 'none';
        }
        if (e.target === openButton) {
            popup.style.display = 'block';
            overlay.style.display = 'block';
        }
    };
};

$(document).ready(function() {
    $(".day_item").click(function() {
        let id = $(this).data("id");
        let value = $(this).data("value");
        $.ajax({
            url: "time.php",
            type: "GET",
            data: {
                id,
                value,
            },
            success: function(data1) {
                $("#showtime_list").html(data1);
            },
        });
    });
});
</script>
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
                        <a href="" class="footer-item-link">Email hỗ trợ: hoidaptl@.vn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>

</html>