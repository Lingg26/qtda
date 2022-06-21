<?php include('./connect/connect.php') ?>
<?php
if (isset($_GET['action']) == 'logout') {
    unset($_SESSION['customer']);
    unset($_SESSION['id_cus']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="doan1.css">
    <title>Trang chủ</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"
        integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <header>
        <div class="header_main">
            <div class="container">
                <div style="display: flex;line-height: 60px;">
                    <div class="header_logo">
                        <a href="trangchu.php" class="main_link">
                            <img src="./img/Annotation 2022-02-26 221732.png" alt="" class="header_img">
                        </a>
                    </div>
                    <div class="header_main-navbar">
                        <ul class="navbar-list">
                            <li class="navbar-list-items">
                                <div class="navbar-list-items-tittle">Phim <i class="fas fa-angle-down"></i></div>
                                <div class="dropdown">
                                    <?php
                                    $sql = "SELECT * FROM tbl_category";
                                    $res = mysqli_query($conn, $sql);
                                    foreach ($res as $value) {
                                    ?>
                                    <ul>
                                        <li> <a href="category.php?id=<?php echo $value['id_cat'] ?> "
                                                class="navbar-list-items-name"><?php echo $value['name']; ?></a></li>
                                        <?php
                                    }
                                        ?>
                                    </ul>
                                </div>
                            </li>
                            <li class="navbar-list-items">
                                <div class="navbar-list-items-tittle">Liên Hệ </div>
                            </li>
                            <li class="navbar-list-items">
                                <div class="navbar-list-items-tittle">Khuyến Mãi </div>
                            </li>
                        </ul>
                    </div>
                    <div class="header_main-search">
                        <div class="search-input">
                            <input type="text" name="" placeholder="  Tên Phim..." class="search-text">
                        </div>
                        <div id="search_item"></div>
                    </div>
                    <div class="header_main-login">
                        <?php
                        if (isset($_SESSION['customer'])) {
                        ?>
                        <div class="login-tittle"><i class="fa-solid fa-user"
                                style="color:aliceblue; width:10px; height:10px"></i>
                            <span><?php echo $_SESSION['customer'] ?> </span>
                        </div>
                        <div class="dropdown1">
                            <ul>
                                <li><a href="trangchu.php?action=logout" class="navbar-list-items-name">Đăng Xuất</a>
                                </li>
                            </ul>
                        </div>
                        <?php
                        } else {
                        ?>
                        <div class="login-tittle">Login </div>
                        <div class="dropdown1">
                            <ul>
                                <li><a href="login.php" class="navbar-list-items-name">Đăng Nhập</a></li>
                                <li><a href="registration.php" class="navbar-list-items-name">Đăng Kí</a></li>
                            </ul>
                        </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <script>
    $(document).ready(function() {
        $('.search-text').keyup(function() {
            var input = $(this).val();
            if (input != '') {
                $('#search_item').css("display", "block");
                $.ajax({
                    url: "search.php",
                    type: "POST",
                    data: {
                        input: input,
                    },
                    success: function(data2) {
                        $("#search_item").html(data2);
                    },
                });
            } else {
                $('#search_item').css("display", "none");
            }
        });
    });
    </script>