@extends('admin.layout.master')
@section('page-title','Users List')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12 col-md-6"></div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table" class="text-center table table-striped">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Order Id</th>
                                    <th>Comment</th>
                                    <th>Customer</th>
                                    <th>Time create</th>
                                    <th>Option</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @forelse($orders as $key => $order)
                                        <td>{{$key + 1}}</td>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->order_comment}}</td>
                                        <td>{{$order->customer->customer_name}}</td>
                                        <td>{{$order->created_at}}</td>
                                        <td></td>
                                        {{--                                        <td><a href="{{route('customers.edit', $customer->id)}}" style="padding: 5px"--}}
                                        {{--                                               class="btn btn-warning">Edit</a>--}}
                                        {{--                                            <a href="{{route('customers.destroy', $customer->id)}}" style="padding: 5px"--}}
                                        {{--                                               class="btn btn-danger"--}}
                                        {{--                                               onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a></td>--}}
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No Information</td>
                                    </tr>
                                @endforelse
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Order Id</th>
                                    <th>Comment</th>
                                    <th>Customer</th>
                                    <th>Time create</th>
                                    <th>Option</th>
                                </tr>
                                </tfoot>
                            </table>
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


