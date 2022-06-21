<?php include('../connect/connect.php'); ?>
<?php
$id = $_GET['id_film'];
$sql2 = "SELECT * FROM tbl_film WHERE id=$id";
$res2 = mysqli_query($conn, $sql2);
if ($res2 == true) {
    $count2 = mysqli_num_rows($res2);
    if ($count2 == 1) {
        $row2 = mysqli_fetch_assoc($res2);
        $name_film = $row2['name_film'];
        $id_cat = $row2['category'];
        $name_director = $row2['name_director'];
        $name_actor = $row2['name_actor'];
        $film_genre = $row2['film_genre'];
        $premiere_date = $row2['premiere_date'];
        $film_time = $row2['film_time'];
        $film_rate = $row2['film_rate'];
        $film_intro = $row2['film_intro'];
        $film_trailer = $row2['film_trailer'];
        $img_banner = $row2['img_banner$img_banner'];
        $film_img = $row2['film_img'];
        $active = $row2['active'];
    } else {
        header('location: qlfilm.php');
    }
}
?>
<div class="col py-3">
    <h1 class="text-center text-capitalize">Sửa Thông Tin Phim</h1>
    <a href="qlfilm.php" type="button" class=" btn btn-danger mb-2">Quay lại</a>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group mt-2">
            <label for="exampleInputEmail1" class="mb-2 text-capitalize">Tên phim</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name_film"
                value="<?php echo $name_film ?>" placeholder="Nhập tên danh mục">
        </div>
        <div class="form-group mt-2">
            <label for="exampleInputEmail1" class="mb-2 text-capitalize">Danh Mục</label>
            <select name="category" class="form-control inputItems">
                <?php
                $sql = "SELECT * FROM tbl_category";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);
                if ($count > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        $id_cat = $row['id_cat'];
                        $name = $row['name'];
                ?>
                <option <?php if ($current_danhmuc == $id_cat) {
                                    echo "Selected";
                                } ?> value="<?php echo $id_cat; ?>">
                    <?php echo $name; ?>
                </option>
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
            <label for="exampleInputEmail1" class="mb-2 text-capitalize">Đạo Diễn</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name_director"
                value="<?php echo $name_director ?>" placeholder="Nhập tên danh mục">
        </div>
        <div class="form-group mt-2">
            <label for="exampleInputEmail1" class="mb-2 text-capitalize">Diễn Viên</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name_actor"
                value="<?php echo $name_actor ?>" placeholder="Nhập tên danh mục">
        </div>
        <div class="form-group mt-2">
            <label for="exampleInputEmail1" class="mb-2 text-capitalize">Ngày Công Chiếu</label>
            <input type="datetime-local" class="form-control" id="exampleInputEmail1" name="premiere_date"
                value="<?php echo $premiere_date ?>" placeholder="Nhập tên danh mục">
        </div>
        <div class="form-group mt-2">
            <label for="exampleInputEmail1" class="mb-2 text-capitalize">Thể Loại</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="film_genre"
                value="<?php echo $film_genre ?>" placeholder="Nhập tên danh mục">
        </div>
        <div class="form-group mt-2">
            <label for="exampleInputEmail1" class="mb-2 text-capitalize">Thời Gian</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="film_time"
                value="<?php echo $film_time ?>" placeholder="Nhập tên danh mục">
        </div>
        <div class="form-group mt-2">
            <label for="exampleInputEmail1" class="mb-2 text-capitalize">Độ Tuổi</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="film_rate"
                value="<?php echo $film_rate ?>" placeholder="Nhập tên danh mục">
        </div>
        <div class="form-group mt-2">
            <label class="mb-1" for="exampleInputEmail1">Mô tả</label>
            <textarea name="film_intro" class="form-control ckeditor" id="" cols="20" rows="10"
                value="<?php echo $film_intro ?>" placeholder="Nhập Mô Tả"></textarea>
        </div>
        <div class="form-group mt-2">
            <label class="mb-1" for="exampleInputEmail1">Link trailer</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="film_trailer"
                value="<?php echo $film_trailer ?> placeholder=" Nhập đường dẫn">
        </div>
        <div class="mb-3 mt-2">
            <label for="formFile" class="form-label text-capitalize">Banner cũ</label>
            <?php
            if ($img_banner == "") {
                echo "Không có ảnh";
            } else {
            ?>
            <img src="./image/<?php echo $img_banner ?>" style="width: 150px; height: 150px; margin-bottom: 10px;">
            <?php
            }
            ?>
        </div>
        <div class="mb-3 mt-2">
            <label for="formFile" class="form-label text-capitalize">Hình ảnh mới</label>
            <input class="form-control" type="file" name="img_banner" id="formFile">
        </div>
        <div class="mb-3 mt-2">
            <label for="formFile" class="form-label text-capitalize">Poster cũ</label>
            <?php
            if ($film_img == "") {
                echo "Không có ảnh";
            } else {
            ?>
            <img src="./image/<?php echo $film_img ?>" style="width: 150px; height: 150px; margin-bottom: 10px;">
            <?php
            }
            ?>
        </div>
        <div class="mb-3 mt-2">
            <label for="formFile" class="form-label text-capitalize">Hình ảnh mới</label>
            <input class="form-control" type="file" name="film_img" id="formFile">
        </div>
        <button type="submit" name="submit" class="btn btn-success mt-2 mb-2 float-right">Sửa</button>
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
        $sql1 = "UPDATE tbl_danhmuc SET
            tendanhmuc = '$tendanhmuc',
            hinhanh = '$image_name',
            active = '$active'
            WHERE id = $id
        ";
        $res1 = mysqli_query($conn, $sql1);
    }
    ?>
</div>
<?php require 'public/inc/footeradmin.php' ?>