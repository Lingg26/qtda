<?php include('./public/header.php') ?>
<?php
$id = $_GET['id'];
$_SESSION['id_st'] = $id;
?>
<div class="seat_room">
    <div class="container">
        <div class="screen_room">
            <h3>MÀN HÌNH</h3>
        </div>
        <div class="seat_list">
            <?php
            $sql = "SELECT * FROM tbl_showtime where id_st=$id ";
            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($res);
            $id_view = $row['id_view'];
            $_SESSION['id_view'] = $row['id_view'];
            $sql1 = "SELECT id_chair, active_$id_view as active from st_$id_view";
            $res1 = mysqli_query($conn, $sql1);
            foreach ($res1 as $value) {
                if ($value['active'] == "No") {
            ?>
            <div class="seat_item free" data-name="<?php echo $value['id_chair'] ?>" data-price="120000">
                <?php echo $value['id_chair'] ?></div>
            <?php
                } else {
                ?>
            <div class="seat_item-booked"><?php echo $value['id_chair'] ?></div>
            <?php
                }
            }
            ?>
        </div>
        <div class="chair_list">
            <div class="chair_item">
                <span class="chair_item-left"><i class="fa-solid fa-square"></i>Ghế trống</span>
                <span class="chair_item-center"> <i class="fa-solid fa-square"></i>Ghế được chọn</span>
                <span class="chair_item-right"><i class="fa-solid fa-square"></i>Ghế đã được đặt</span>
            </div>
        </div>
        <form action="thanhtoan.php">
            <div class="total">
                <div class="total_seat">
                    <h1>Tổng ghế</h1>
                    <p class="seat-name"></p>
                    <input type="hidden" name="seat" class="input_seat" value="">
                </div>
                <div class="total_price">
                    <h1>Tổng tiền</h1>
                    <p class="seat-price"></p>
                    <input type="hidden" name="price" class="input_price" value="">
                </div>
                <button type="submit" name="submit">Thanh toán</button>
            </div>
        </form>

    </div>
</div>
<script>
const seatItems = document.querySelectorAll(".seat_item");
const seatName = document.querySelector(".seat-name");
const seatPrice = document.querySelector(".seat-price");
const inputSeat = document.querySelector(".input_seat");
const inputPrice = document.querySelector(".input_price");
[...seatItems].forEach((item) => item.addEventListener("click", handleClick));
let seat = [];

function handleClick(e) {
    e.target.classList.toggle("free");
    e.target.classList.toggle("selected");
    const selectedSeat = document.querySelectorAll(".seat_item.selected");
    seatPrice.innerText = (
        selectedSeat.length * e.target.getAttribute("data-price")
    ).toLocaleString();
    inputPrice.setAttribute(
        "value",
        selectedSeat.length * e.target.getAttribute("data-price")
    );
    if (selectedSeat.length === 0) {
        seatName.textContent = "";
        seat = [];
    } else {
        let seatSelectedName = e.target.getAttribute("data-name");
        console.log(seatSelectedName);
        let index = seat.indexOf(seatSelectedName);
        if (
            seatSelectedName === e.target.innerText &&
            seat.includes(seatSelectedName)
        ) {
            seat.splice(index, 1);
        } else {
            seat.push(seatSelectedName);
        }
        seat.sort();
        seatName.innerText = seat.join(", ");
        inputSeat.setAttribute("value", seat);
    }
}
</script>