<?php
include('../connect/connect.php');
$id = $_GET['id'];
$sql = "DELETE FROM tbl_user WHERE id=$id";
$res = mysqli_query($conn, $sql);
if ($res == true) {
    header('location: qluser.php');
} else {
    header('location: qluser.php');
}