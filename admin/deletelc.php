<?php
include('../connect/connect.php');
$id = $_GET['id_lc'];
$sql = "DELETE FROM tbl_showtime WHERE id_st=$id";
$res = mysqli_query($conn, $sql);
if ($res == true) {
    header('location: qllichchieu.php');
} else {
    header('location: qllichchieu.php');
}