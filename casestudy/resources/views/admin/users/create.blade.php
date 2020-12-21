@extends('admin.layout.master')
@section('page-title','Users List')
@section('content')
    <div class="container">
        <div class="col-12 col-md-12 mt-4">
            <div class="card">
                <h5 class="card-header">Thêm mới người dùng</h5>
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Fullname</label>
                            <input name="name" value="{{ old('name') }}" type="text"
                                   class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input name="user_name" value="{{ old('user_name') }}" type="text"
                                   class="form-control @error('user_name') is-invalid @enderror">
                            @error('user_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input name="user_image" type="file" class="form-control">
                            @error('user_image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" name="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror">
                            <div>
                                <img style="width: 5%; float: right"
                                     src="https://cdn3.iconfinder.com/data/icons/show-and-hide-password/100/show_hide_password-07-512.png"
                                     onclick="eyeFunction()">
                            </div>
                            @error('password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <script type="text/javascript">
                                var x = true;

                                function eyeFunction() {
                                    if (x) {
                                        document.getElementById('password').type = "text";
                                        x = false;
                                    } else {
                                        document.getElementById('password').type = "password";
                                        x = true;
                                    }
                                }
                            </script>
                        </div>
                        {{--                        <div class="form-group">--}}
                        {{--                            <label>Password Confirm</label>--}}
                        {{--                            <input name="password_confirm" type="password"--}}
                        {{--                                   class="form-control @error('password_confirm') is-invalid @enderror">--}}
                        {{--                            @error('password_confirm')--}}
                        {{--                            <div class="text-danger">{{ $message }}</div>--}}
                        {{--                            @enderror--}}
                        {{--                        </div>--}}
                        <div class="form-group">
                            <label>Email</label>
                            <input name="user_email" value="{{ old('user_email') }}" type="email"
                                   class="form-control @error('user_email') is-invalid @enderror">
                            @error('user_email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input name="user_phone" value="{{ old('user_phone') }}" type="text"
                                   class="form-control @error('user_phone') is-invalid @enderror">
                            @error('user_phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            <select name="role" id="">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
{{--                                <option value="admin">Admin</option>--}}
{{--                                <option value="staff">Staff</option>--}}
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Thêm mới</button>
                            <a href="{{route('users.index')}}" class="btn btn-info">Trở về</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
