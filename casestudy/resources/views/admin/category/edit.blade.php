@extends('admin.layout.master')
@section('content')
    <div class="container">
        <div class="col-12 col-md-12 mt-4">
            <div class="card">
                <h5 class="card-header">Chỉnh sửa người dùng</h5>
                <div class="card-body">
                    <form action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" value="{{ $category->name }}" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input name="description" value="{{ $category->description }}" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Chỉnh sửa</button>
                            <a href="{{ route('category.index') }}" class="btn btn-info">Trở về</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

