@include('index.layout.navbar')
{{----}}
<img style="width: 100%"
     src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/40l2QSxoMj1LSuiIn8T4qE/72cc2cb18624006b47cc86aaa561fbdb/Holiday_hero_start_2800x1000.jpg"
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
                                                      src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/7C2aNSlpMDI8bbVEqoGNx4/2bf5b0e8e25219a89aab3f72c811292c/Holiday_gifts_for_him_1000x900.jpg"
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
                                                        src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/6IxTBxHxpgWZQv4jqHPjMv/0f530ff16bebdacff30fdb202f459c72/Holiday_gifts_for_her_1000x900.jpg"
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
                                                          src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/4NPb81KjtelplX2mt9nnFt/b15dc9de52c3a8b2b55e7f6febb6bccf/Jewelry_Banner_2800x700.jpg"
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
    <div class="ghost_text">
        <a href="{{route('index.story')}}" class="btn btn-outline-primary">THE STORY BEHIND DANG QUANG WATCH</a>
    </div>
    <div class="image_index">
        <div class="ghost">
            <div class="face">
                <div class="eyes">
                    <span></span><span></span>
                </div>
                <div class="mouth"></div>
            </div>

            <div class="hands">
                <span><img style="width: 25px; border-radius: 50%; height: 103%"
                           src="data:image/png;base64,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"
                           alt=""></span>
                <span><img style="width: 25px; border-radius: 50%; height: 103%"
                           src="data:image/png;base64,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"
                           alt=""></span>
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
