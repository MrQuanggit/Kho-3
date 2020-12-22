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
    <div class="row">
        <h2 class="text-center col-sm-12 col-md-12">Cart</h2>
        <div class="col-sm-6 col-md-1">
        </div>
        <div class="col-sm-6 col-md-6">
            <h4>INFORMATION CUSTOMERS</h4>
            <div class="col-12">
            <p>* Email:</p>
            <input style="width: 100%;" type="text">
            </div>
            <div class="col-6" style="float: left">
                <p>* Email:</p>
                <input style="width: 100%;" type="text">
            </div>
            <div class="col-6" style="float: right">
                <p>* Email:</p>
                <input style="width: 100%;" type="text">
            </div>
            <div class="col-12">
                <p>* Email:</p>
                <input style="width: 100%;" type="text">
            </div>
            <div class="col-12">
                <p>* Email:</p>
                <input style="width: 100%;" type="text">
            </div>
            <p style="float: left; padding-left: 15px"><i class="fas fa-globe"> Vietnam</i></p>
        </div>
        <div class="col-sm-6 col-md-4" style="border: 5px">
            @if(isset($cart))
                @foreach($cart->items as $item)
                    <hr>
                    <div>
                        <img style="width: 20%; float: left" src="{{$item['product']->getProductImage()}}" alt="">
                        <div style="">
                            <h5>{{$item['product']->product_name}}</h5>
                            <a href="{{route('cart.minusToCart',$item['product']->id)}}"><i
                                    class="fas fa-minus"></i></a>
                            <span>{{$item['totalQty']}}</span>
                            <a href="{{route('cart.addToCart',$item['product']->id)}}"><i class="fas fa-plus"></i></a>
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
                    <a style="float: right" class="btn btn-outline-primary" onclick="return confirm('Do you want to delete this product ?')" href="{{route('cart.delete')}}">Delete All</a>
                </div>
            @else()
                <h5>Empty cart</h5>
            @endif
        </div>
        <div class="col-sm-6 col-md-1">
        </div>
    </div>
</div>

@include('index.layout.footer')
