@extends('admin.layout.master')
@section('page-title','Products List')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12 col-md-6"></div>
                                <div class="col-12 col-md-6" style="text-align: right">
                                    <a href="{{route('product.create')}}" class="btn btn-success">+ Add Product</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table" class="text-center table table-striped">
                                <thead>
                                <tr>
                                    <th>Number</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Stock</th>
                                    <th>View</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Option</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @forelse($products as $key => $product)
                                        <td>{{$key + 1}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td><img style="width: 100px; height: 100px"
                                                 src="@if($product->getProductImage() == 'https://quangvoc8.s3.amazonaws.com/')
                                                     https://miro.medium.com/max/2834/0*f81bU2qWpP51WWWC.jpg
                                                   @else
                                                 {{$product->getProductImage()}}
                                                 @endif"
                                                 class="img-border-radius avatar-40 img-fluid"></td>
                                        <td>{{$product->stock}}</td>
                                        <td>{{$product->view}}</td>
                                        <td>{{$product->priceEach}}</td>
                                        <td>{{$product->category->name}}</td>
                                        <td><a href="{{route('product.edit', $product->id)}}" style="padding: 5px"
                                               class="btn btn-warning">Edit</a>
                                            <a href="{{route('product.destroy', $product->id)}}" style="padding: 5px"
                                               class="btn btn-danger"
                                               onclick="return confirm('Do you want to delete this product?')">Delete</a></td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No information</td>
                                    </tr>
                                @endforelse
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Number</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Stock</th>
                                    <th>View</th>
                                    <th>Price</th>
                                    <th>Category</th>
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

