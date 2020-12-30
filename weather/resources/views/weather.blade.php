<!doctype html>
<html lang="en">
<head>
    <title>Weather App</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        body {
            color: white;
            overflow-x: hidden;
            height: 100%;
            background-image: linear-gradient(#81D4FA, #2196F3);
            background-repeat: no-repeat
        }

        .card0 {
            width: 94%
        }

        .card1 {
            background-image: linear-gradient(#2196F3, #81D4FA);
            padding: 30px 20px 30px 50px
        }

        .image {
            width: 300px;
            height: 300px
        }

        .large-font {
            font-size: 70px;
            font-family: Arial
        }

        .fa-sun-o {
            font-size: 22px
        }

        .card2 {
            background-color: #607D8B;
            padding: 0px 0px 40px 40px
        }

        input {
            background-color: #607D8B;
            padding: 24px 0px 12px 0px !important;
            width: 80%;
            box-sizing: border-box;
            border: none !important;
            border-bottom: 1px solid #CFD8DC !important;
            font-size: 16px !important;
            color: #fff !important
        }

        input:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border-bottom: 1px solid #fff !important;
            outline-width: 0;
            font-weight: 400
        }

        ::placeholder {
            color: #B0BEC5 !important;
            opacity: 1
        }

        :-ms-input-placeholder {
            color: #B0BEC5 !important
        }

        ::-ms-input-placeholder {
            color: #B0BEC5 !important
        }

        .fa-search {
            color: #607D8B;
            background-color: #E1F5FE;
            font-size: 20px;
            padding: 20px;
            width: 20%;
            cursor: pointer
        }

        .light-text {
            color: #B0BEC5
        }

        .suggestion:hover {
            color: #fff;
            cursor: pointer
        }

        .line {
            height: 1px;
            background-color: #B0BEC5
        }

        @media screen and (max-width: 500px) {
            .card1 {
                padding-left: 26px
            }
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid px-1 px-sm-3 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="row card0">
            <div class="card1 col-lg-8 col-md-7"><small>the.weather</small>
                <div class="text-center"><img class="image mt-5" src="https://i.imgur.com/M8VyA2h.png"></div>
                <div class="row px-3 mt-3 mb-3">
                    <h1 class="large-font mr-3" id="celcius">{{$celcius}}&#176;</h1>
                    <div class="d-flex flex-column mr-3">
                        <h2 class="mt-3 mb-0" id="nameCity">{{$nameCity}}</h2><span id="nameCountry">{{$nameCountry}}</span>
                        <small> {{ now('Asia/Ho_Chi_Minh')->toDayDateTimeString() }}</small>
                    </div>
                    <div class="d-flex flex-column text-center">
                        <h3 class="fa fa-sun-o mt-4"></h3> <small id="rain">{{$rain}}</small>
                    </div>
                </div>
            </div>
            <div class="card2 col-lg-4 col-md-5">
                <div class="row px-3"><input type="text" name="location" id="location" placeholder="Another location" class="mb-5">
                </div>
                <div class="mr-5">
                    <form method="get" action="">
                        <select class="form-select" id="city">
                            <option value="Hue">Hue</option>
                            <option value="HaNoi">HaNoi</option>
                            <option value="Ho Chi Minh">Ho Chi Minh</option>
                            <option value="DaLat">Da Lat</option>
                        </select>
                    </form>
                    <div class="line my-5"></div>
                    <p>Weather Details</p>
                    <div class="row px-3">
                        <p class="light-text">Cloudy</p>
                        <p class="ml-auto light-text" id="cloud">{{$cloud}}</p>
                    </div>
                    <div class="row px-3">
                        <p class="light-text">Humidity</p>
                        <p class="ml-auto light-text" id="humidity">{{$humidity}}</p>
                    </div>
                    <div class="row px-3">
                        <p class="light-text">Wind</p>
                        <p class="ml-auto light-text" id="wind">{{$wind}}</p>
                    </div>
                    <div class="line mt-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
</script>
</body>
</html>
<script>
    $(document).ready(function() {
        $('#city').on("change", function () {
            var city = $(this).val();
            console.log(city);
            $.get("{{route('weather')}}"+"/"+city,function (data){
                $('#nameCity').html(data.nameCity);
                $('#nameCountry').html(data.nameCountry);
                $('#celcius').html(data.celcius+"&#176;");
                $('#rain').html(data.rain);
                $('#cloud').html(data.cloud);
                $('#humidity').html(data.humidity);
                $('#wind').html(data.wind);
                console.log(data.nameCity);
            })
        })
        $('#location').on("keydown", function (e) {
            if(e.keyCode == 13) {
                let city = $(this).val();
                console.log(city);
                $.get("{{route('weather')}}"+"/"+city,function (data){
                    $('#nameCity').html(data.nameCity);
                    $('#nameCountry').html(data.nameCountry);
                    $('#celcius').html(data.celcius+"&#176;");
                    $('#rain').html(data.rain);
                    $('#cloud').html(data.cloud);
                    $('#humidity').html(data.humidity);
                    $('#wind').html(data.wind);
                    console.log(data.nameCity);
                })
            }
        })
    })
    $("div.mr-5 select").val("Hue")
</script>

