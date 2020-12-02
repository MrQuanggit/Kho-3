@extends('admin.master')
@section('content')
    <div class="container">
        <div class="col-12 col-md-12 mt-4">
            <div class="card">
                <h5 class="card-header">Chỉnh sửa người dùng</h5>
                <div class="card-body">
                    @foreach($users as $key => $user)
                    <form action="{{ route('users.update', $user->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Username</label>
                            <input name="username" value="{{ $user->username }}" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" value="{{ $user->password }}" type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label >Email</label>
                            <input name="mail" value="{{ $user->mail }}" type="email" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label >Phone</label>
                            <input name="phone" value="{{ $user->phone }}" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Chỉnh sửa</button>
                            <a href="{{ route('users.index') }}" class="btn btn-info">Trở về</a>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

