@include('index.layout.navbar')
{{----}}
<img style="width: 100%"
     src="/storage/webs/men.png"
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
                        <a href="#">
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
                            <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                            <li><a href="{{route('cart.addToCart',$product->id)}}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <a href="{{route('index.product',$product->id)}}" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">{{$product->product_name}}</a></h3>
                        <div class="price">From: ${{$product->priceEach}}</div>
                    </div>
                </div>
            </div>
        @endforeach
        <img style="margin: 30px 0" src="/storage/webs/gift.png" alt="">
    </div>
    <h3 class="h3" style="text-align: center; padding: 20px 0; text-transform: uppercase;">Find more timeless
        designs</h3>
    <div class="row outline-group">
        <div class="col-md-4 col-sm-6">
            <a href="" class="btn btn-outline-primary">WOMEN'S WATCHES</a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="" class="btn btn-outline-primary">ALL JEWELRY</a>
        </div>
        <div class="col-md-4 col-sm-6">
            <a href="" class="btn btn-outline-primary">OUR STORY</a>
        </div>
    </div>
</div>
{{--OWL--}}
<div class="container">
    <h3 class="h3" style="text-align: center; padding: 20px 0">IMAGE FROM CUSTOMER</h3>
    <div class="owl-carousel owl-theme">
        <div class="item">
            <div class="product-grid5">
                <div class="product-image5">
                    <a href="#">
                        <img class="pic-1" src="https://cdn3.dhht.vn/wp-content/uploads/2017/11/DW00100163.jpg">
                        <img class="pic-2" src="https://cdn3.dhht.vn/wp-content/uploads/2017/11/DW00100163-2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Sweat Shirt</a></h3>
                    <div class="price">$11.00 - $15.00</div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="product-grid5">
                <div class="product-image5">
                    <a href="#">
                        <img class="pic-1" src="https://cdn3.dhht.vn/wp-content/uploads/2017/07/15_DW00100162.jpg">
                        <img class="pic-2" src="https://cdn3.dhht.vn/wp-content/uploads/2017/07/DW-DW00100162-1.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Women's Shirt</a></h3>
                    <div class="price">$10.00 - $12.00</div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="product-grid5">
                <div class="product-image5">
                    <a href="#">
                        <img class="pic-1" src="https://cdn3.dhht.vn/wp-content/uploads/2016/02/96_DW00100002.jpg">
                        <img class="pic-2" src="https://cdn3.dhht.vn/wp-content/uploads/2016/02/DW00100002-2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Sweat Shirt</a></h3>
                    <div class="price">$11.00 - $15.00</div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="product-grid5">
                <div class="product-image5">
                    <a href="#">
                        <img class="pic-1" src="https://cdn3.dhht.vn/wp-content/uploads/2019/05/141_DW00100275.jpg">
                        <img class="pic-2" src="https://cdn3.dhht.vn/wp-content/uploads/2019/05/DW00100275_2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Men's Sweat Shirt</a></h3>
                    <div class="price">$11.00 - $15.00</div>
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
