<?php include './include/sidebar.php' ?>

<div class="col py-3">
    <h1 class="text-center text-capitalize">Thêm Phim</h1>
    <a href="qlfilm.php" type="button" class=" btn btn-danger mb-2">Quay lại</a>

    <form method="POST" enctype="multipart/form-data">
        <div class="form-group mt-2">
            <label class="mb-1" for="exampleInputEmail1">Tên phim</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name_film"
                placeholder="Nhập tên phim">
        </div>
        <div class="form-group mt-2">
            <label class="mb-1" for="exampleInputEmail1">Tên danh mục</label>
            <select name="category" class="form-control ">
                <?php
                $sql = "SELECT * FROM tbl_category";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);
                if ($count > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        $id_cat = $row['id_cat'];
                        $name = $row['name'];
                ?>
                <option value="<?php echo $id_cat; ?>"><?php echo $name; ?></option>
                <?php
                    }
                } else {
                    ?>
                <option value="0">Không tìm thấy danh mục sản phẩm</option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group mt-2">
            <label class="mb-1" for="exampleInputEmail1">Đạo diễn</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name_director"
                placeholder="Nhập đạo diễn">
        </div>
        <div class="form-group mt-2">
            <label class="mb-1" for="exampleInputEmail1">Diễn viên</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name_actor"
                placeholder="Nhập diễn viên">
        </div>
        <div class="form-group mt-2">
            <label class="mb-1" for="exampleInputEmail1">Thể loại</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="film_genre"
                placeholder=" Nhập thể loại">
        </div>
        <div class="form-group mt-2">
            <label class="mb-1" for="exampleInputEmail1">Ngày công chiếu</label>
            <input type="date" class="form-control" id="exampleInputEmail1" name="premiere_date">
        </div>
        <div class="form-group mt-2">
            <label class="mb-1" for="exampleInputEmail1">Thời gian</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="film_time"
                placeholder=" Nhập thời gian">
        </div>
        <div class="form-group mt-2">
            <label class="mb-1" for="exampleInputEmail1">Độ tuổi</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="film_rate"
                placeholder=" Nhập độ tuổi">
        </div>
        <div class="form-group mt-2">
            <label class="mb-1" for="exampleInputEmail1">Mô tả</label>
            <textarea name="film_intro" class="form-control ckeditor" id="" cols="20" rows="10"
                placeholder="Nhập Mô Tả"></textarea>
        </div>
        <div class="form-group mt-2">
            <label class="mb-1" for="exampleInputEmail1">Link trailer</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="film_trailer"
                placeholder=" Nhập đường dẫn">
        </div>
        <div class="form-group mt-2">
            <label class="mb-1" for="exampleInputEmail1">Ảnh banner</label>
            <input class="form-control" type="file" name="img_banner" id="formFile">
        </div>
        <div class="form-group mt-2">
            <label class="mb-1" for="exampleInputEmail1">Poster</label>
            <input class="form-control" type="file" name="film_img" id="formFile">
        </div>
        <div class="form-group mt-2">
            <label for="exampleInputEmail1" class="mb-1 text-capitalize">Hiển thị</label>
            <select name="active" class="form-control ">
                <option value="Yes">Hiển Thị</option>
                <option value="No">Không Hiển Thị</option>
            </select>
        </div>
        <button type="submit" name="submit" class="float-right btn btn-primary mt-2 mb-2">Thêm</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $name_film = $_POST['name_film'];
        $id_cat = $_POST['category'];
        $name_director = $_POST['name_director'];
        $name_actor = $_POST['name_actor'];
        $film_genre = $_POST['film_genre'];
        $premiere_date = $_POST['premiere_date'];
        $film_time = $_POST['film_time'];
        $film_rate = $_POST['film_rate'];
        $film_intro = $_POST['film_intro'];
        $film_trailer = $_POST['film_trailer'];
        if (isset($_FILES['film_img']['name'])) {
            $film_img = $_FILES['film_img']['name'];
            if ($film_img != "") {
                $ext1 = explode('.', $film_img);
                $file_ext1 = end($ext1);
                $film_img = "TL-" . rand(0000, 9999) . "." . $file_ext1;
                $src = $_FILES['film_img']['tmp_name'];
                $dst = "./image/" . $film_img;
                $upload = move_uploaded_file($src, $dst);
                if ($upload == false) {
                    die();
                }
            }
        } else {
            $film_img = "";
        }
        if (isset($_FILES['img_banner']['name'])) {
            $img_banner = $_FILES['img_banner']['name'];
            if ($img_banner != "") {
                $ext2 = explode('.', $img_banner);
                $file_ext2 = end($ext2);
                $img_banner = "TL-" . rand(0000, 9999) . "." . $file_ext2;
                $src1 = $_FILES['img_banner']['tmp_name'];
                $dst1 = "./image/" . $img_banner;
                $upload1 = move_uploaded_file($src1, $dst1);
                if ($upload1 == false) {
                    die();
                }
            }
        } else {
            $img_banner = "";
        }
        if (isset($_POST['active'])) {
            $active = $_POST['active'];
        } else {
            $active = "No";
        }
        $sql2 = "INSERT INTO tbl_film SET
            name_film = '$name_film',
            id_cat = '$id_cat',
            name_director = '$name_director',
            name_actor = '$name_actor',
            film_genre = '$film_genre',
            premiere_date = '$premiere_date',
            film_time = '$film_time',
            film_rate = '$film_rate',
            film_intro = '$film_intro',
            film_trailer = '$film_trailer',
            img_banner = '$img_banner',
            film_img = '$film_img',
            active = '$active'
        ";
        $res2 = mysqli_query($conn, $sql2);
        if ($res2 === true) {
            echo "<script>window.location.href='qlfilm.php';</script>";
        }
    }
    ?>
</div>
<?php include '../admin/include/footer.php' ?>