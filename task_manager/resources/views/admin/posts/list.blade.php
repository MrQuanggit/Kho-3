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
        <div class="card-body">
            <a class="btn btn-success" data-toggle="modal" data-target="#create">
                Add
            </a>
            <input style="float: right" id="location" type="text"
                   placeholder="Search for ..">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $key => $post)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->getCategoryName() }}</td>
                        <td><a href="{{ $post->id }}" data-toggle="modal" data-target="#edit" style="padding: 5px"
                               class="btn btn-warning">Edit</a>
                            <a href="{{ $post->id }}" style="padding: 5px" class="btn btn-danger"
                               onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
{{--Create--}}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Category</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Category">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
{{--Edit--}}
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Category</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Category">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#search').on("keydown", function (e) {
            if(e.keyCode == 13) {
                let city = $(this).val();
                console.log(city);
                $.get("{{route('weather')}}"+"/"+city,function (data){
                    $('#nameCity').html(data.nameCity);
                    $('#nameCountry').html(data.nameCountry);
                    $('#celcius').html(data.celcius+"&#176;");
                    $('#rain').html(data.rain);
                    $('#cloud').html(data.cloud);
                    $('#humidity').html(data.humidity);
                    $('#wind').html(data.wind);
                    console.log(data.nameCity);
                })
            }
        })

    })
</script>
