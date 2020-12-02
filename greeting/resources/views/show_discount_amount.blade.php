<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
<p>Mô tả sản phẩm: <?= $productDescription ?></p>
<p>Giá tiền ban đầu: {{ $price }}</p>
<p>Tỉ lệ chiết khấu: {{ $discountPercent }}</p>
<hr>
<p>Số tiền chiết khấu là: {{ $discountAmount }}</p>
<p>Số tiền sau khi chiết khấu là: {{ $discountPrice }}</p>
</body>
</html>
