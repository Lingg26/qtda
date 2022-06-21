<?php
include('../connect/connect.php');
$id = $_GET['id_film'];
$sql = "DELETE FROM tbl_film WHERE id_film=$id";
$res = mysqli_query($conn, $sql);
if ($res == true) {
    header('location: qlfilm.php');
} else {
    header('location: qlfilm.php');
}