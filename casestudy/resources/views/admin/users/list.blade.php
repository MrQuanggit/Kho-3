@extends('admin.layout.master')
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
                                    <a href="{{route('users.create')}}" class="btn btn-success">+ Add User</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table" class="text-center">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Họ tên</th>
                                    <th>Ảnh</th>
                                    <th>Tên tài khoản</th>
                                    <th>Địa chỉ Email</th>
                                    <th>Vai trò</th>
                                    <th>Trạng thái đăng nhập</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @forelse($users as $key => $user)
                                        <td>{{$key + 1}}</td>
                                        <td>{{$user->name}}</td>
                                        <td><img style="width: 100px; height: 100px"
                                                 src="@if($user->getUserImage() == '/storage/avatars/')
                                                     https://st.quantrimang.com/photos/image/072015/22/avatar.jpg
                                                   @else
                                                 {{$user->getUserImage()}}
                                                 @endif"
                                                 class="img-border-radius avatar-40 img-fluid"></td>
                                        <td>{{$user->user_name}}</td>
                                        <td>{{$user->user_email}}</td>
                                        <td>
                                            @if($user->role == 1)
                                                Admin
                                            @else
                                                Staff
                                            @endif
                                        </td>
                                        <td>{{$user->status}}</td>
                                        <td><a href="{{route('users.edit', $user->id)}}" style="padding: 5px"
                                               class="btn btn-warning">Edit</a>
                                            <a href="{{route('users.destroy', $user->id)}}" style="padding: 5px"
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
                                    <th>STT</th>
                                    <th>Họ tên</th>
                                    <th>Ảnh</th>
                                    <th>Tên tài khoản</th>
                                    <th>Địa chỉ Email</th>
                                    <th>Vai trò</th>
                                    <th>Trạng thái đăng nhập</th>
                                    <th>Tùy chọn</th>
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
