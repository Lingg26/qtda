<?php
include('../connect/connect.php');
$id = $_GET['id_cat'];
$sql = "DELETE FROM tbl_category WHERE id_cat=$id";
$res = mysqli_query($conn, $sql);
if ($res == true) {
    header('location: qldanhmuc.php');
} else {
    header('location: qldanhmuc.php');
}