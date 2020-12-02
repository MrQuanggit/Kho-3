<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dictionary</title>
</head>
<body>
<h1>Dictionary</h1>
@if(!empty($result))
    <p> Từ {{ $word }} có nghĩa là {{ $result }}</p>
@else
    <p>No Word</p>
@endif
</body>
</html>
