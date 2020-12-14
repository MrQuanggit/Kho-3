@extends('admin.master')
@section('content')
    <div class="container">
        <div class="col-12 col-md-12 mt-4">
            <div class="card">
                <h5 class="card-header">Thêm mới người dùng</h5>
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Username</label>
                            <input name="username" value="{{ old('username') }}" type="text"
                                   class="form-control @error('username') is-invalid @enderror">
                            @error('username')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input name="image" type="file" class="form-control">
                            @error('image')
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
                        <div class="form-group">
                            <label>Password Confirm</label>
                            <input name="password_confirm" type="password"
                                   class="form-control @error('password_confirm') is-invalid @enderror">
                            @error('password_confirm')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="mail" value="{{ old('mail') }}" type="email"
                                   class="form-control @error('mail') is-invalid @enderror">
                            @error('mail')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input name="phone" value="{{ old('phone') }}" type="text"
                                   class="form-control @error('phone') is-invalid @enderror">
                            @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            @foreach($roles as $role)
                                <div class="form-check">
                                    <input name="roles[{{ $role->id }}]" class="form-check-input" type="checkbox"
                                           value="{{ $role->id }}">
                                    <label class="form-check-label">
                                        {{ $role->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Thêm mới</button>
                            <a href="{{ route('users.index') }}" class="btn btn-info">Trở về</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
