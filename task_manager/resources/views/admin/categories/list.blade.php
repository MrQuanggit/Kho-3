@extends('admin.master')
@section('page-title','Danh sach nguoi dung')
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0 px-0 px-md-3">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="#">Quản lý danh mục</a></li>
        <li class="breadcrumb-item active">Danh sách danh mục</li>
        <!-- Breadcrumb Menu-->
    </ol>
@endsection
@section('content')
    <div class="card">
        <div class="card-header"> DataTables
            <div class="card-header-actions"><a class="card-header-action" href="https://datatables.net"
                                                target="_blank"><small class="text-muted">docs</small></a></div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Total post</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $key => $category)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $category->name }}</td>
                        <td><a href="{{ route('categories.getPostByCategoryId', $category->id) }}">{{ $category->posts()->count() }}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
