<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
<h1>Calculator</h1>
<form action="/calculator" method="POST">
    @csrf
    <p>
        <input type="text" name="productDescription" placeholder="Product Description">
    </p>
    <p>
        <input type="text" name="price" placeholder="List Price">
    </p>
    <p>
        <input type="text" name="discountPercent" placeholder="Discount Percent">
    </p>
    <p>
        <button type="submit">Tính chiết khấu</button>
    </p>
</form>
</body>
</html>
