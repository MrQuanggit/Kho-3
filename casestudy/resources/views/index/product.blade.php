@include('index.layout.navbar')
<div class="container group-product">
    <div class="row">
        <div class="col-sm-6 col-md-1">
        </div>
        <div class="col-sm-6 col-md-5">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
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
                <span style="float: right">${{$product->priceEach}}</span>
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
                    <a href="#">
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
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
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
{{--        <div class="item">--}}
{{--            <div class="product-grid5">--}}
{{--                <div class="product-image5">--}}
{{--                    <a href="#">--}}
{{--                        <img class="pic-1" src="https://cdn3.dhht.vn/wp-content/uploads/2017/07/15_DW00100162.jpg">--}}
{{--                        <img class="pic-2" src="https://cdn3.dhht.vn/wp-content/uploads/2017/07/DW-DW00100162-1.jpg">--}}
{{--                    </a>--}}
{{--                    <ul class="social">--}}
{{--                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>--}}
{{--                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>--}}
{{--                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                    </ul>--}}
{{--                    <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>--}}
{{--                </div>--}}
{{--                <div class="product-content">--}}
{{--                    <h3 class="title"><a href="#">Women's Shirt</a></h3>--}}
{{--                    <div class="price">$10.00 - $12.00</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <div class="product-grid5">--}}
{{--                <div class="product-image5">--}}
{{--                    <a href="#">--}}
{{--                        <img class="pic-1" src="https://cdn3.dhht.vn/wp-content/uploads/2017/07/15_DW00100162.jpg">--}}
{{--                        <img class="pic-2" src="https://cdn3.dhht.vn/wp-content/uploads/2017/07/DW-DW00100162-1.jpg">--}}
{{--                    </a>--}}
{{--                    <ul class="social">--}}
{{--                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>--}}
{{--                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>--}}
{{--                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                    </ul>--}}
{{--                    <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>--}}
{{--                </div>--}}
{{--                <div class="product-content">--}}
{{--                    <h3 class="title"><a href="#">Women's Shirt</a></h3>--}}
{{--                    <div class="price">$10.00 - $12.00</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <div class="product-grid5">--}}
{{--                <div class="product-image5">--}}
{{--                    <a href="#">--}}
{{--                        <img class="pic-1" src="https://cdn3.dhht.vn/wp-content/uploads/2017/07/15_DW00100162.jpg">--}}
{{--                        <img class="pic-2" src="https://cdn3.dhht.vn/wp-content/uploads/2017/07/DW-DW00100162-1.jpg">--}}
{{--                    </a>--}}
{{--                    <ul class="social">--}}
{{--                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>--}}
{{--                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>--}}
{{--                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                    </ul>--}}
{{--                    <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>--}}
{{--                </div>--}}
{{--                <div class="product-content">--}}
{{--                    <h3 class="title"><a href="#">Women's Shirt</a></h3>--}}
{{--                    <div class="price">$10.00 - $12.00</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <div class="product-grid5">--}}
{{--                <div class="product-image5">--}}
{{--                    <a href="#">--}}
{{--                        <img class="pic-1" src="https://cdn3.dhht.vn/wp-content/uploads/2017/07/15_DW00100162.jpg">--}}
{{--                        <img class="pic-2" src="https://cdn3.dhht.vn/wp-content/uploads/2017/07/DW-DW00100162-1.jpg">--}}
{{--                    </a>--}}
{{--                    <ul class="social">--}}
{{--                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>--}}
{{--                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>--}}
{{--                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                    </ul>--}}
{{--                    <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>--}}
{{--                </div>--}}
{{--                <div class="product-content">--}}
{{--                    <h3 class="title"><a href="#">Women's Shirt</a></h3>--}}
{{--                    <div class="price">$10.00 - $12.00</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <div class="product-grid5">--}}
{{--                <div class="product-image5">--}}
{{--                    <a href="#">--}}
{{--                        <img class="pic-1" src="https://cdn3.dhht.vn/wp-content/uploads/2017/07/15_DW00100162.jpg">--}}
{{--                        <img class="pic-2" src="https://cdn3.dhht.vn/wp-content/uploads/2017/07/DW-DW00100162-1.jpg">--}}
{{--                    </a>--}}
{{--                    <ul class="social">--}}
{{--                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>--}}
{{--                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>--}}
{{--                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                    </ul>--}}
{{--                    <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>--}}
{{--                </div>--}}
{{--                <div class="product-content">--}}
{{--                    <h3 class="title"><a href="#">Women's Shirt</a></h3>--}}
{{--                    <div class="price">$10.00 - $12.00</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="item">--}}
{{--            <div class="product-grid5">--}}
{{--                <div class="product-image5">--}}
{{--                    <a href="#">--}}
{{--                        <img class="pic-1" src="https://cdn3.dhht.vn/wp-content/uploads/2017/07/15_DW00100162.jpg">--}}
{{--                        <img class="pic-2" src="https://cdn3.dhht.vn/wp-content/uploads/2017/07/DW-DW00100162-1.jpg">--}}
{{--                    </a>--}}
{{--                    <ul class="social">--}}
{{--                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>--}}
{{--                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>--}}
{{--                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                    </ul>--}}
{{--                    <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>--}}
{{--                </div>--}}
{{--                <div class="product-content">--}}
{{--                    <h3 class="title"><a href="#">Women's Shirt</a></h3>--}}
{{--                    <div class="price">$10.00 - $12.00</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

    {{--    image him her--}}
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="card-group">
                <a href=""><img class="image-group"
                                src="/storage/webs/him.png"
                                alt=""></a>
                <div class="card-text">
                    <h3>Girt For Him</h3>
                    <a href="" class="btn btn-light">Go got it</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6]">
            <div class="card-group">
                <a href=""><img class="image-group"
                                src="/storage/webs/her.png"
                                alt=""></a>
                <div class="card-text">
                    <h3>Girt For Her</h3>
                    <a href="" class="btn btn-light">Go got it</a>
                </div>
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
