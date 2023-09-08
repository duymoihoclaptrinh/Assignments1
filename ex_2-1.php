<?php
// Biến lưu thông tin sản phẩm và giá gốc
$tenSanPham = "Guitar";
$giaBanDau = 100000;

// Biến để lưu giá tiền sau khi giảm giá
$giaSauGiamGia = 0;

// Biến để kiểm tra xem người dùng đã bấm nút thanh toán chưa
$daThanhToan = false;

// Kiểm tra xem người dùng đã bấm nút thanh toán chưa
if (isset($_POST['thanh_toan'])) {
    // Tính giá tiền sau khi giảm giá 10%
    $giaSauGiamGia = $giaBanDau * 0.9;
    $daThanhToan = true; // Đã bấm nút thanh toán
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tính giá tiền sau khi giảm giá</title>
</head>
<body>
    <h1>Thông tin sản phẩm</h1>
    <p>Tên sản phẩm: <?php echo $tenSanPham; ?></p>
    <p>Giá gốc: <?php echo number_format($giaBanDau, 0, '.', ','); ?> VND</p>

    <form method="POST" action="">
        <input type="submit" name="thanh_toan" value="Thanh toán">
    </form>

    <?php
    // Kiểm tra nếu đã tính giá tiền sau khi giảm giá và đã bấm nút thanh toán
    if ($daThanhToan) {
        echo "<h2>Giá tiền sau khi giảm giá 10% là: " . number_format($giaSauGiamGia, 0, '.', ',') . " VND</h2>";
    }
    ?>
</body>
</html>
    