<?php
include('../connect/connect.php');
$id = $_GET['id_room'];
$sql = "DELETE FROM tbl_room WHERE id_room=$id";
$res = mysqli_query($conn, $sql);
if ($res == true) {
    header('location: qlphong.php');
} else {
    header('location: qlphong.php');
}