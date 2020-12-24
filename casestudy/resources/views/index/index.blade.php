@include('index.layout.navbar')
{{----}}
<img style="width: 100%" src="/storage/webs/nav.png" alt="">
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
<div class="onSale">
    <div class="h5 text-title">It’s not too late! Order today and receive your gift on time for Christmas</div>
</div>
{{--OWL--}}
<div class="container">
    <h3 class="h3" style="text-align: center; padding: 20px 0">Holiday Favorites </h3>
    <div class="row">
        @foreach($favorites as $key => $favorite)
            <div class="col-md-3 col-sm-6">
                <div class="product-grid5">
                    <div class="product-image5">
                        <a href="{{route('index.product',$favorite->id)}}">
                            <img class="pic-1" src="@if($favorite->getProductImage() == '/storage/products/')
                                https://miro.medium.com/max/2834/0*f81bU2qWpP51WWWC.jpg
@else
                            {{$favorite->getProductImage()}}
                            @endif">
                            <img class="pic-2" src="@if($favorite->getProductImage2() == '/storage/products/')
                                https://miro.medium.com/max/2834/0*f81bU2qWpP51WWWC.jpg
@else
                            {{$favorite->getProductImage2()}}
                            @endif">
                        </a>
                        <ul class="social">
                            <li><a href="{{route('cart.addToCart',$favorite->id)}}" data-tip="Add to Cart"><i
                                        class="fa fa-shopping-cart"></i></a></li>
                            <li><a href="{{route('index.product',$favorite->id)}}" data-tip="Quick View"><i
                                        class="fa fa-search"></i></a></li>
                        </ul>
                        <a href="{{route('index.product',$favorite->id)}}" class="select-options"><i
                                class="fa fa-arrow-right"></i> Select Options</a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">{{$favorite->product_name}}</a></h3>
                        <div class="price">From: ${{$favorite->priceEach}}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <h3 class="h3" style="text-align: center; padding: 20px 0">Hot Sale </h3>
    <div class="owl-carousel owl-theme">
        @foreach($hotSales as $key => $hotSale)
            <div class="item">
                <div class="product-grid5">
                    <div class="product-image5">
                        <a href="{{route('index.product',$hotSale->id)}}">
                            <img class="pic-1" src="@if($hotSale->getProductImage() == '/storage/products/')
                                https://miro.medium.com/max/2834/0*f81bU2qWpP51WWWC.jpg
                                @else
                            {{$hotSale->getProductImage()}}
                            @endif">
                            <img class="pic-2" src="@if($hotSale->getProductImage2() == '/storage/products/')
                                https://miro.medium.com/max/2834/0*f81bU2qWpP51WWWC.jpg
                                @else
                            {{$hotSale->getProductImage2()}}
                            @endif">
                        </a>
                        <ul class="social">
                            <li><a href="{{route('cart.addToCart',$hotSale->id)}}" data-tip="Add to Cart"><i
                                        class="fa fa-shopping-cart"></i></a></li>
                            <li><a href="{{route('index.product',$hotSale->id)}}" data-tip="Quick View"><i
                                        class="fa fa-search"></i></a></li>
                        </ul>
                        <a href="{{route('index.product',$hotSale->id)}}" class="select-options"><i
                                class="fa fa-arrow-right"></i> Select Options</a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">{{$hotSale->product_name}}</a></h3>
                        <div class="price">From: ${{$hotSale->priceEach}}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
{{----}}
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="card-group">
                <a href="{{route('index.men')}}"><img class="image-group"
                                                      src="/storage/webs/him.png"
                                                      alt=""></a>
                <div class="card-text">
                    <h3>Gift For Him</h3>
                    <a href="{{route('index.men')}}" class="btn btn-light">Go got it</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="card-group">
                <a href="{{route('index.women')}}"><img class="image-group"
                                                        src="/storage/webs/her.png"
                                                        alt=""></a>
                <div class="card-text">
                    <h3>Gift For Her</h3>
                    <a href="{{route('index.women')}}" class="btn btn-light">Go got it</a>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="card-group">
                <a href="{{route('index.jewelry')}}"><img class="image-group"
                                                          src="/storage/webs/jel.png"
                                                          alt=""></a>
                <div class="card-text">
                    <h3>JEWELRY</h3>
                    <a href="{{route('index.jewelry')}}" class="btn btn-light">Go got it</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{----}}
<div>
    <div class="image_index">
        <div class="ghost">
            <div class="face">
                <div class="eyes">
                    <span></span><span></span>
                </div>
                <div class="mouth"></div>
            </div>

            <div class="hands">
                <span></span><span></span>
            </div>

            <div class="ghost_text">
                <span>Out Story</span>
            </div>

            <div class="feet">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
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
