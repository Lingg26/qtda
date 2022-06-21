<?php include("./connect/connect.php"); ?>
<?php
$id = $_GET["id"];
$date = $_GET["value"];
$time = date("m/d/Y", $date);
$sql = "SELECT * from tbl_showtime where id_film=$id and date_format(datetime, '%m/%d/%Y' )='$time' ORDER BY datetime ASC ";
$res = mysqli_query($conn, $sql);
date_default_timezone_set('Asia/Ho_Chi_Minh');
foreach ($res as $ngaychieu) {
    if ($ngaychieu['datetime'] >= date("Y-m-d H:i:s")) {
?>
<li style="list-style:none" class="showtime_list">
    <a href="ticket.php?id=<?php echo $ngaychieu["id_st"] ?>"
        style="text-decoration:none;color:black;text-align: center; width:100%;"><?php echo date('H:i', strtotime($ngaychieu["datetime"])) ?></a>
</li>
<?php
    }
}
?>