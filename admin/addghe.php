<?php include './include/sidebar.php' ?>

<?php
$row = 'A';
for ($i = 1; $i <= 10; $i++) {
    if ($i == 10) {
        $id_ghe = $row . $i;
        $sql = "INSERT INTO tbl_chair SET 
        id_chair= '$id_ghe',
        active='No'
        ";
        $res = mysqli_query($conn, $sql);
    } else {
        $id_ghe = $row . '0' . $i;
        $sql = "INSERT INTO tbl_chair SET 
        id_chair= '$id_ghe',
        active='No'
        ";
        $res = mysqli_query($conn, $sql);
    }
}
$row1 = 'B';
for ($i = 1; $i <= 10; $i++) {
    if ($i == 10) {
        $id_ghe = $row1 . $i;
        $sql = "INSERT INTO tbl_chair SET 
        id_chair= '$id_ghe',
        active='No'
        ";
        $res = mysqli_query($conn, $sql);
    } else {
        $id_ghe = $row1 . '0' . $i;
        $sql = "INSERT INTO tbl_chair SET 
        id_chair= '$id_ghe',
        active='No'
        ";
        $res = mysqli_query($conn, $sql);
    }
}
$row2 = 'C';
for ($i = 1; $i <= 10; $i++) {
    if ($i == 10) {
        $id_ghe = $row2 . $i;
        $sql = "INSERT INTO tbl_chair SET 
        id_chair= '$id_ghe',
        active='No'
        ";
        $res = mysqli_query($conn, $sql);
    } else {
        $id_ghe = $row2 . '0' . $i;
        $sql = "INSERT INTO tbl_chair SET 
        id_chair= '$id_ghe',
        active='No'
        ";
        $res =
            mysqli_query($conn, $sql);
    }
}
$row3 = 'D';
for ($i = 1; $i <= 10; $i++) {
    if ($i == 10) {
        $id_ghe = $row3 . $i;
        $sql = "INSERT INTO tbl_chair SET 
        id_chair= '$id_ghe',
        active='No'
        ";
        $res = mysqli_query($conn, $sql);
    } else {
        $id_ghe = $row3 . '0' . $i;
        $sql = "INSERT INTO tbl_chair SET 
        id_chair= '$id_ghe',
        active='No'
        ";
        $res = mysqli_query($conn, $sql);
    }
}
$row4 = 'E';
for ($i = 1; $i <= 10; $i++) {
    if ($i == 10) {
        $id_ghe = $row4 . $i;
        $sql = "INSERT INTO tbl_chair SET 
        id_chair= '$id_ghe',
        active='No'
        ";
        $res = mysqli_query($conn, $sql);
    } else {
        $id_ghe = $row4 . '0' . $i;
        $sql = "INSERT INTO tbl_chair SET 
        id_chair= '$id_ghe',
        active='No'
        ";
        $res = mysqli_query($conn, $sql);
    }
}
$row5 = 'F';
for ($i = 1; $i <= 10; $i++) {
    if ($i == 10) {
        $id_ghe = $row5 . $i;
        $sql = "INSERT INTO tbl_chair SET 
        id_chair= '$id_ghe',
        active='No'
        ";
        $res = mysqli_query($conn, $sql);
    } else {
        $id_ghe = $row5 . '0' . $i;
        $sql = "INSERT INTO tbl_chair SET 
        id_chair= '$id_ghe',
        active='No'
        ";
        $res = mysqli_query($conn, $sql);
    }
}
?>