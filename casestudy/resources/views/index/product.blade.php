@include('index.layout.navbar')
<div class="container group-product">
    <div class="row">
        <div class="col-sm-6 col-md-1">
        </div>
        <div class="col-sm-6 col-md-5">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" data-toggle="modal" data-target=".bs-example-modal-lg" style="cursor: pointer;">
                    <div class="carousel-item active">
                        <img class="d-block w-100"
                             src="
                             {{$product->getProductImage()}}
                                 "
                             alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                             src="{{$product->getProductImage2()}}"
                             alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                             src="{{$product->getProductImage3()}}"
                             alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                             src="{{$product->getProductImage4()}}"
                             alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"
                          style="background-image: url('https://image.flaticon.com/icons/png/512/130/130884.png'); transform: rotate(-180deg);"
                          aria-hidden="false"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"
                          style="background-image: url('https://image.flaticon.com/icons/png/512/130/130884.png');"
                          aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-5">
            <div>
                <span style="font-size: 24px">{{$product->product_name}}</span>
                <span style="float: right; font-size: 22px">${{$product->priceEach}}</span>
            </div>
            <hr>
            <p>Size: <span class="btn btn-primary">{{$product->size}}</span></p>
            <hr>
            <p>
                {{$product->description}}
            </p>
            <a style="width: 100%; color: rgb(205, 188, 122)" href="{{route('cart.addToCart',$product->id)}}"
               class="btn btn-primary">
                ADD TO CART <i class="fas fa-arrow-right"></i>
            </a>
            <hr>
            <div>
                <img
                    src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/4Fj2waZXgjzYLyM1vxOW8L/c7f3961f85d545c07d1ccfd167bb24b3/Shipping_UPS.svg?ecom2=true&"
                    alt="">
                <span>UPS Express Saver</span>
                <span style="float: right">Free*</span>
                <p> 2 - 3 business days</p>
                <p>* For orders over $50.</p>
            </div>
        </div>
        <div class="col-sm-6 col-md-1">
        </div>
    </div>
    {{--On sale--}}
    <div class="onSale" style="background-color: rgb(99, 0, 0); margin-top: 20px">
        <div class="h5 text-title">OFF 25% WHEN BUYING OVER 2 PRODUCTS</div>
    </div>
    {{--Owl Carousel--}}
    <h3 class="h3" style="text-align: center; padding: 20px 0">Others Also Viewed </h3>
    <div class="owl-carousel owl-theme">
        @foreach($categories as $key => $category)
        <div class="item">
            <div class="product-grid5">
                <div class="product-image5">
                    <a href="{{route('index.product',$category->id)}}">
                        <img class="pic-1" src="@if($category->getProductImage() == '/storage/products/')
                            https://miro.medium.com/max/2834/0*f81bU2qWpP51WWWC.jpg
                            @else
                        {{$category->getProductImage()}}
                        @endif">
                        <img class="pic-2" src="@if($category->getProductImage2() == '/storage/products/')
                            https://miro.medium.com/max/2834/0*f81bU2qWpP51WWWC.jpg
                            @else
                        {{$category->getProductImage2()}}
                        @endif">
                    </a>
                    <ul class="social">
                        <li><a href="{{route('index.product',$category->id)}}" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="{{route('cart.addToCart',$category->id)}}" data-tip="Add to Cart"><i
                                    class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a href="{{route('index.product',$category->id)}}" class="select-options"><i
                            class="fa fa-arrow-right"></i> Select Options</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">{{$category->product_name}}</a></h3>
                    <div class="price">From: ${{$category->priceEach}}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{--    image him her--}}
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="card-group">
                <a href=""><img class="image-group"
                                src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/7C2aNSlpMDI8bbVEqoGNx4/2bf5b0e8e25219a89aab3f72c811292c/Holiday_gifts_for_him_1000x900.jpg"
                                alt=""></a>
                <div class="card-text">
                    <h3>Gift For Him</h3>
                    <a href="" class="btn btn-light">Go got it</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6]">
            <div class="card-group">
                <a href=""><img class="image-group"
                                src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/6IxTBxHxpgWZQv4jqHPjMv/0f530ff16bebdacff30fdb202f459c72/Holiday_gifts_for_her_1000x900.jpg"
                                alt=""></a>
                <div class="card-text">
                    <h3>Gift For Her</h3>
                    <a href="" class="btn btn-light">Go got it</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{--Carousel Modal--}}
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="img-responsive modal-image" src="{{$product->getProductImage()}}" alt="...">
                    </div>
                    <div class="item">
                        <img class="img-responsive modal-image" src="{{$product->getProductImage2()}}" alt="...">
                    </div>
                    <div class="item">
                        <img class="img-responsive modal-image" src="{{$product->getProductImage3()}}" alt="...">
                    </div>
                    <div class="item">
                        <img class="img-responsive modal-image" src="{{$product->getProductImage4()}}" alt="...">
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
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
            nav: false,
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
