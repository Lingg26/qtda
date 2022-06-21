<?php include("./include/sidebar.php") ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <form method="GET" action="index.php">
        <input type="date" name="from">
        <input type="date" name="to">
        <button type="submit" name="submit">Tìm</button>
    </form>
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Doanh Thu Ngày </div>
                            <?php
                            $sql = "SELECT SUM(tbl_bill.total) as tong from tbl_bill,tbl_showtime where tbl_bill.id_st= tbl_showtime.id_st and date_format(datetime, '%Y/%m/%d' ) = CURDATE()";
                            $res = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($res);
                            if ($count > 0) {
                                $row_data = mysqli_fetch_array($res);
                            ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php echo number_format($row_data['tong']) ?>đ</div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Doanh Thu Tháng</div>
                            <?php
                            $sql1 = "SELECT SUM(tbl_bill.total) as tong from tbl_bill,tbl_showtime where tbl_bill.id_st= tbl_showtime.id_st and MONTH(datetime) = MONTH(CURDATE())";
                            $res1 = mysqli_query($conn, $sql1);
                            $count1 = mysqli_num_rows($res1);
                            if ($count1 > 0) {
                                $row_data1 = mysqli_fetch_array($res1);
                            ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php echo number_format($row_data1['tong']) ?>đ</div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div>
            <canvas id="myChart"></canvas>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php
$from = $_GET['from'] ?? null;
$to = $_GET['to'] ?? null;
$sql9 = "SELECT date_format(tbl_showtime.datetime, '%m/%d/%Y' ) as ngay, COUNT(tbl_bill.id_bill) AS sodonhang FROM tbl_bill,tbl_showtime WHERE tbl_bill.id_st=tbl_showtime.id_st and tbl_showtime.datetime >='$from' AND tbl_showtime.datetime <='$to' group by date_format(tbl_showtime.datetime, '%m/%d/%Y' )";
$res9 = mysqli_query($conn, $sql9);
foreach ($res9 as $line) {
    $month[] = date("d-m-Y", strtotime($line['ngay'] ?? null));
    $data[] = $line['sodonhang'];
}
?>
<script>
const labels = <?php echo json_encode($month) ?>;
const data = {
    labels: labels,
    datasets: [{
        label: 'Số đơn hàng được đặt',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: <?php echo json_encode($data) ?>,
    }, ],
};
const config = {
    type: 'line',
    data: data,
    options: {
        responsive: true,
        interaction: {
            mode: 'index',
            intersect: false,
        },
        stacked: false,
        plugins: {
            title: {
                display: true,
                // text: 'Biểu đổ thống kê tổng số tiền và số ghế được đặt theo ngày từ <?php echo date("d-m-Y", strtotime($from)) ?> đến <?php echo date("d-m-Y", strtotime($to)) ?>'
            }
        },
    },
};
</script>
<script>
const myChart = new Chart(
    document.getElementById('myChart'),
    config
);
</script>