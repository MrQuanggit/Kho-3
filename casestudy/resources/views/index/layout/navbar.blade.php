<!doctype html>
<html lang="en">
<head>
    <title>DQ Watch</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{----}}
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    {{----}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
          integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
    {{----}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <base href="{{asset('/index_resource/resource')}}">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Navigation -->
<!-- <nav class="navbar"> -->
<div class="header">
    <input type="checkbox" id="check" />
    <label for="check" class="show-menu-btn">
        <i class="fas fa-ellipsis-h"></i>
    </label>
    <div class="container-fluid home">
        <div class="row">
            <div class="col-md-3 menu">
                <span style="float: left; padding-left: 15px"><i class="fas fa-globe"> Vietnam</i></span>
            </div>
            <div class="col-md-6 text-center">
                <h4 class="title">D A N G Q U A N G  W A T C H</h4>
            </div>
            <div class="col-md-3 menu">
                <a style="font-size: 18px; float: right" href="{{route('cart.showCart')}}"><i class="fas fa-shopping-cart"></i>
                    <span>({{session('cart') ? session('cart')->totalQty:0}})</span></a>
            </div>

        </div>
    </div>
    <div class="menu subHeader">
        <a href="{{route('index.home')}}" class="cool-link">HOME PAGE</a>
        <a href="{{route('index.women')}}" class="cool-link">WOMEN'S WATCHES</a>
        <a href="{{route('index.men')}}" class="cool-link">MEN'S WATCHES</a>
        <a href="{{route('index.jewelry')}}" class="cool-link">JEWELRY</a>
        <a href="{{route('index.story')}}" class="cool-link">ABOUT US</a>
        <a href="{{route('cart.showCart')}}" id="hide-card"><i class="fas fa-shopping-cart"></i>
            <span>({{session('cart') ? session('cart')->totalQty:0}})</span></a>
        <label for="check" class="hide-menu-btn">
            <i class="fas fa-times"></i>
        </label>
    </div>
</div>
<!-- </nav> -->
