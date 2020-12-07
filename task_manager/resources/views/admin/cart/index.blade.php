@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#">
                                <img class="img-thumbnail" src="{{$product['image']}}">
                            </a>
                            <ul class="social">
                                <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="{{route('cart.addToCart',$product->id)}}" data-tip="Add to Cart"><i
                                            class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <span class="product-new-label">Sale</span>
                            <span class="product-discount-label">20%</span>
                        </div>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star disable"></li>
                        </ul>
                        <div class="product-content">
                            <h3 class="title"><a href="#">{{$product['name']}}</a></h3>
                            <div class="price">
                                <span>$ {{$product['price']}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
