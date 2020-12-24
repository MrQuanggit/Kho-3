@extends('admin.layout.master')
@section('page-title','Customer List')
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
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Option</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @forelse($customers as $key => $customer)
                                        <td>{{$key + 1}}</td>
                                        <td>{{$customer->customer_name}}</td>
                                        <td>{{$customer->customer_phone}}</td>
                                        <td>{{$customer->customer_email}}</td>
                                        <td>{{$customer->customer_address}}</td>
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
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
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

