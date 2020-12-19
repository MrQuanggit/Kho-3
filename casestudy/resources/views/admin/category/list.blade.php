@extends('admin.layout.master')
@section('page-title','Categories List')
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
                                    <a href="{{route('category.create')}}" class="btn btn-success">+ Add Category</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table" class="text-center table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Option</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @forelse($category as $key => $categories)
                                        <td>{{$key + 1}}</td>
                                        <td>{{$categories->name}}</td>
                                        <td>{{$categories->description}}</td>
                                        <td><a href="{{route('category.edit', $categories->id)}}" style="padding: 5px"
                                               class="btn btn-warning">Edit</a>
                                            <a href="{{route('category.destroy', $categories->id)}}" style="padding: 5px"
                                               class="btn btn-danger"
                                               onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a></td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">Không có dữ liệu</td>
                                    </tr>
                                @endforelse
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
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

