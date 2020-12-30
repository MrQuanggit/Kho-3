@include('index.layout.navbar')
{{----}}
<img style="width: 100%"
     src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/11yxxRz2hcaichVWN52Myo/ae55b948975edb044e06c8e08d2a4947/Holiday_gifts_for_him_hero_2800x850.jpg"
     alt="">
{{----}}
<div class="free-ship carousel slide" id="carouselExampleSlidesOnly" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active free-ship-element">
            <div class="d-block w-100">
                <i class="fas fa-plane"></i> Free shipping
            </div>
        </div>
        <div class="carousel-item free-ship-element">
            <div class="d-block w-100">
                <i class="fas fa-toolbox"></i> Free returns
            </div>
        </div>
        <div class="carousel-item free-ship-element">
            <div class="d-block w-100">
                <i class="fas fa-stopwatch"></i> Two year warranty
            </div>
        </div>
    </div>
</div>
{{----}}
<div class="onSale" style="background-color: rgb(99, 0, 0)">
    <div class="h5 text-title">OFF 25% WHEN BUYING OVER 2 PRODUCTS</div>
</div>
{{--Product--}}
<div class="container">
    <h3 class="h3" style="text-align: center; padding: 20px 0">CELEBRATE WITH THE PERFECT GIFT FOR HIM</h3>
    <div class="row">
        @foreach($products as $key => $product)
            <div class="col-md-3 col-sm-6">
                <div class="product-grid5">
                    <div class="product-image5">
                        <a href="{{route('index.product',$product->id)}}">
                            <img class="pic-1" src="@if($product->getProductImage() == '/storage/products/')
                                https://miro.medium.com/max/2834/0*f81bU2qWpP51WWWC.jpg
                                @else
                            {{$product->getProductImage()}}
                            @endif">
                            <img class="pic-2" src="@if($product->getProductImage2() == '/storage/products/')
                                https://miro.medium.com/max/2834/0*f81bU2qWpP51WWWC.jpg
                                @else
                            {{$product->getProductImage2()}}
                            @endif">
                        </a>
                        <ul class="social">
                            <li><a href="{{route('cart.addToCart',$product->id)}}" data-tip="Add to Cart"><i
                                        class="fa fa-shopping-cart"></i></a></li>
                            <li><a href="{{route('index.product',$product->id)}}" data-tip="Quick View"><i
                                        class="fa fa-search"></i></a></li>
                        </ul>
                        <a href="{{route('index.product',$product->id)}}" class="select-options"><i
                                class="fa fa-arrow-right"></i> Select Options</a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">{{$product->product_name}}</a></h3>
                        <div class="price">From: ${{$product->priceEach}}</div>
                    </div>
                </div>
            </div>
        @endforeach
        <img style="margin: 30px 0; width: 100%" src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/7gFEcdbz6KILtGf3U0EKZg/e07d563de955a650fb22149c74c1c734/2224x240_giftwrapping_darker.jpg" alt="">
    </div>
    <h3 class="h3" style="text-align: center; padding: 20px 0; text-transform: uppercase;">Find more timeless
        designs</h3>
    <div class="row outline-group">
        <div class="col-md-4 col-sm-6">
            <a href="{{route('index.women')}}" class="btn btn-outline-primary">WOMEN'S WATCHES</a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="{{route('index.jewelry')}}" class="btn btn-outline-primary">ALL JEWELRY</a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="{{route('index.story')}}" class="btn btn-outline-primary">OUR STORY</a>
        </div>
    </div>
</div>

{{--OWL--}}
<h3 class="text-center">IMAGE FROM CUSTOMER</h3>
<div class="owl-carousel owl-theme" style="margin-bottom: 10px">
    <div class="item"><img style="width: 100%"
                           src="https://i.pinimg.com/originals/7c/b4/52/7cb4522cb16e5325f828490fd8258289.jpg"
                           alt=""></div>
    <div class="item"><img style="width: 100%"
                           src="https://lh3.googleusercontent.com/GT2TQ-TJqvOvNWwL9DcG1RPDSqUmFs7TSB_l1dKPHmH8KAhNgqM0hphEP8D8LIf5EMWpeI7Xr9YmPWyOwkKAHy50ZL0=w512"
                           alt=""></div>
    <div class="item"><img style="width: 100%"
                           src="https://lh3.googleusercontent.com/PkV9kkRGHQuSaC1sJ6una583VLrVX2l7xJSu3h-O7Foo-QoBlM3V6IKNTCyVLZjzcFBQrzZz9QTiC4yEXulwVgxa7L0=w512"
                           alt=""></div>
    <div class="item"><img style="width: 100%"
                           src="https://d1kkg0o175tdyf.cloudfront.net/large/m_cb1bf4c5349e-2019-06-12-11-29-42-000773.jpg"
                           alt=""></div>
    <div class="item"><img style="width: 100%"
                           src="https://finixpost.com/wp-content/uploads/2014/10/daniel-.jpg"
                           alt=""></div>
</div>

@include('index.layout.footer')
<script>
    $(document).ready(function ($) {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    })
</script>
