@extends('admin.master')
@section('content')
    <div class="container">
        <h2 class="text-center mt-3">Cart</h2>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-md-offset-1 mt-2">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($cart))
                    @foreach($cart->items as $item)
                        <tr>
                            <td class="col-sm-8 col-md-6">
                                <div class="media">
                                    <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{$item['product']->image}}" style="width: 70px; height: 70px;"> </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">{{$item['product']->name}}</a></h4>
                                        <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                        <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                                    </div>
                                </div></td>
                            <td class="col-sm-1 col-md-1" style="text-align: center">
                                <a href="{{route('cart.minusToCart',$item['product']->id)}}"><i class="fas fa-minus"></i></a>
                                <span>{{$item['totalQty']}}</span>
                                <a href="{{route('cart.addToCart',$item['product']->id)}}"><i class="fas fa-plus"></i></a>
                            </td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>{{$item['product']->price}}</strong></td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>{{$item['totalPrice']}}</strong></td>
                            <td class="col-sm-1 col-md-1"><a class="btn btn-danger" onclick="return confirm('Do you want to delete this product ?')" href="{{$item['product']->id}}">Delete</a></td>
                        </tr>
                    @endforeach
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>$ {{$cart->totalPrice}}</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                            <a class="btn btn-warning" onclick="return confirm('Do you want to delete all the cart ?')" href="{{route('cart.delete')}}">Delete All</a>
                        <td>
                            <button type="button" class="btn btn-success">
                                Checkout <span class="glyphicon glyphicon-play"></span>
                            </button></td>
                    </tr>
                    </tbody>
                    @else()
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Gio Hang Trong</td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
@endsection
