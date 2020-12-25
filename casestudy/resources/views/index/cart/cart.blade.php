@include('index.layout.navbar')
<div class="free-ship carousel slide" style="margin-top: 120px" id="carouselExampleSlidesOnly" data-ride="carousel">
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
{{----}}
<div class="container">
    <div class="row" style="position: sticky">
        <h2 class="text-center col-sm-12 col-md-12">CHECK OUT</h2>
        <div class="col-sm-6 col-md-1"></div>
        <div class="col-sm-6 col-md-4">
            @if(isset($cart))
                @if($cart->totalQty != 0)
                    @foreach($cart->items as $item)
                        <hr>
                        <div>
                            <img style="width: 20%; float: left" src="{{$item['product']->getProductImage()}}" alt="">
                            <div style="">
                                <h5>{{$item['product']->product_name}}</h5>
                                <a href="{{route('cart.minusToCart',$item['product']->id)}}"><i
                                        class="fas fa-minus"></i></a>
                                <span>{{$item['totalQty']}}</span>
                                <a href="{{route('cart.addToCart',$item['product']->id)}}"><i
                                        class="fas fa-plus"></i></a>
                                <span>x $ {{$item['product']->priceEach}}</span>
                            </div>
                        </div>
                        <h5 style="float: left">$ {{$item['totalPrice']}}</h5>
                        <a style="float: right" href="{{route('cart.deleteProduct', $item['product']->id)}}">
                            <i class="fas fa-times"></i></a>
                        <hr>
                    @endforeach
                    <hr>
                    <div>
                        <h4 style="float: left">Total Price:</h4>
                        <h4 style="float: right">$ {{$cart->totalPrice}}</h4>
                        <div style="clear: both"></div>
                    </div>
                    <div>
                        <a style="float: right" class="btn btn-outline-primary"
                           onclick="return confirm('Do you want to delete this product ?')"
                           href="{{route('cart.delete')}}">Delete All</a>
                    </div>
                @else()
                    <img class="input" style="width: 100%; margin: auto"
                         src="https://professionalscareer.com/assets/images/emptycart.png" alt="">
                    <a style="width: 100%; color: rgb(205, 188, 122); margin-bottom: 20px"
                       href="{{route('index.home')}}"
                       class="btn btn-primary">
                        CONTINUE SHOPPING <i class="fas fa-arrow-left"></i>
                    </a>
                @endif
            @else()
                <img style="width: 100%; margin: auto" src="https://professionalscareer.com/assets/images/emptycart.png"
                     alt="">
                <a style="width: 100%; color: rgb(205, 188, 122); margin-bottom: 20px" href="{{route('index.home')}}"
                   class="btn btn-primary">
                    CONTINUE SHOPPING <i class="fas fa-arrow-left"></i>
                </a>
            @endif
        </div>
        <div class="col-sm-6 col-md-7">
            <form action="{{route('cart.checkout')}}" method="post">
                @csrf
                <h4>INFORMATION CUSTOMERS</h4>
                <div class="col-12 form-group">
                    <label>* Email:</label>
                    <input name="customer_email" value="{{ old('customer_email') }}"
                           class="input-cart form-control @error('customer_email') is-invalid @enderror" type="text">
                    @error('customer_email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 form-group">
                    <label>* Name:</label>
                    <input name="customer_name" value="{{ old('customer_name') }}"
                           class="input-cart form-control @error('customer_name') is-invalid @enderror" type="text">
                    @error('customer_name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 form-group">
                    <label>* Phone:</label>
                    <input name="customer_phone" value="{{ old('customer_phone') }}"
                           class="input-cart form-control @error('customer_phone') is-invalid @enderror" type="text">
                    @error('customer_phone')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 form-group">
                    <label>* Address:</label>
                    <input name="customer_address" value="{{ old('customer_address') }}"
                           class="input-cart form-control @error('customer_address') is-invalid @enderror" type="text">
                    @error('customer_address')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 form-group">
                    <label>* Comment:</label>
                    <input name="order_comment" class="input-cart form-control" type="text">
                </div>
                <p style="float: left; padding-left: 15px"><i class="fas fa-globe"> Vietnam</i></p>
                <div class="clearfix"></div>
                <h4>SHIPPING</h4>
                <img
                    src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/4Fj2waZXgjzYLyM1vxOW8L/c7f3961f85d545c07d1ccfd167bb24b3/Shipping_UPS.svg?ecom2=true&"
                    alt="">
                <span>UPS Express Saver</span>
                <span style="float: right">Free*</span>
                <p> 2 - 3 business days</p>
                <p>* For orders over $50.</p>

                <h4>PAYMENT</h4>
                <div class="col-12" style="margin: 20px">
                    <input type="checkbox">
                    <img
                        src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/2ewe5eMPSEcIqwoU08QIOA/5d89569ef8dfe251d0b795f76e0163d1/visa-2x.png"
                        alt="">
                    <img
                        src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/2MIeYuELok46G2wAIU64Ao/dc9ffe7987f1c1654a722a3506199561/mastercard-2x.png"
                        alt="">
                </div>
                <div class="col-12" style="margin: 20px">
                    <input type="checkbox">
                    <img
                        src="https://www.danielwellington.com/ecom2-image-bucket/mv3xw5mnbbp0/4eXbeetlGwMke2MkY4Kkkw/1d422b9855aacdb179c7a42fd815cfa1/paypal-2x.png"
                        alt="">
                </div>
                <div class="col-12" style="margin: 20px">
                    <input type="checkbox">
                    <img style="width: 15%" src="https://images.barrons.com/im-200212?width=1280&size=1.33333333"
                         alt="">
                </div>
                <button style="width: 100%; color: rgb(205, 188, 122); margin-bottom: 20px"
                        type="submit"
                        class="btn btn-primary">
                    COMPLETE PAYMENT
                </button>
            </form>
        </div>
    </div>
</div>

@include('index.layout.footer')
