<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dictionary</title>
</head>
<body>
<h1>Dictionary</h1>
<form action="/dictionary" method="POST">
    @csrf
    <p>
        <input type="textbox" name="word" placeholder="Nhập từ muốn dịch ..">
    </p>
    <p>
        <button type="submit">Dịch</button>
    </p>
</form>
</body>
</html>
