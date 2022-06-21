<?php include("./connect/connect.php");
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $sql = "SELECT * FROM tbl_film WHERE name_film LIKE '{$input}%'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
?>
<?php
        while ($row = mysqli_fetch_assoc($res)) {
            $id = $row['id_film'];
            $image = $row['film_img'];
            $name = $row['name_film'];
        }
        ?>
<a href="ctfilm.php?id=<?php echo $id ?>" class="search_bar-item">
    <div class="search_bar-img">
        <img src="./admin/image/<?php echo $image ?>" alt="" width="100%">
    </div>
    <div class="search_bar-content">
        <h5 class="search_bar-heading"><?php echo $name ?></h5>
    </div>
</a>
<?php
    } else {
    ?>
<div class="search_bar-item"><span style="color: black;margin-left:20px">Không có phim </span></div>
<?php
    }
}
?>