<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">
            Ứng dụng xem giờ hiện tại của các thành phố trên thế giới
        </div>
        <label for="select-city"></label>
        <select id="select-city">
            <option>Chọn thành phố</option>
            <option value="America-Chihuahua">Chihuahua, Mexico</option>
            <option value="America-Costa_Rica">Costa Rica</option>
            <option value="America-Havana">La Habana, Cuba</option>
            <option value="Asia-Hong_Kong">Hồng Kông</option>
            <option value="Asia-Ho_Chi_Minh">Hồ Chí Minh, Việt Nam</option>
        </select>
    </div>
</div>
</body>
</html>
<script>
    document.getElementById("select-city").onchange = function () {
        ChooseCity()
    };
    function ChooseCity() {
        var time_zone = document.getElementById("select-city");
        window.location.href = time_zone.value;
    }
</script>
