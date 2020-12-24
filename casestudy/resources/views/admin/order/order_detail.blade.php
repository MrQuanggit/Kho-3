@extends('admin.layout.master')
@section('page-title','Order Detail')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card card-primary" style="width: 50%">
                            <div class="card-header">
                                <h3 class="card-title">Customer Information</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    @foreach($orders as $order)
                                        <p>Name: {{$order->customer->customer_name}}</p>
                                        <p>Phone: {{$order->customer->customer_phone}}</p>
                                        <p>Address: {{$order->customer->customer_address}}</p>
                                        <p>Email: {{$order->customer->customer_email}}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="table" class="text-center table table-striped">
                                <thead>
                                <tr>
                                    <th>Order Id</th>
                                    <th>Product Name</th>
                                    <th>Product Image</th>
                                    <th>Quantity</th>
                                    <th>Price Each</th>
                                    <th>Option</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @forelse($order->products as $product)
                                        <td>{{$product->pivot->orders_id}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>
                                            <img style="width: 100px; height: 100px" src="{{$product->getProductImage()}}" alt="">
                                        </td>
                                        <td>{{$product->pivot->quantity}}</td>
                                        <td>$ {{$product->pivot->priceEach}}</td>
                                        <td>
                                        </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No Information</td>
                                    </tr>
                                @endforelse
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Order Id</th>
                                    <th>Product Name</th>
                                    <th>Product Image</th>
                                    <th>Quantity</th>
                                    <th>Price Each</th>
                                    <th>Option</th>
                                </tr>
                                </tfoot>
                            </table>
                            <a style="float: left" href="{{route('order.confirm', $order->id)}}"
                               class="btn btn-primary" onclick="return confirm('Do you want to confirm this order?')">Confirm Orders</a>
                            <a style="float: right" href="{{route('order.delete', $product->pivot->orders_id)}}"
                               class="btn btn-danger" onclick="return confirm('Do you want to delete this order?')">Delete Orders</a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

@endsection



