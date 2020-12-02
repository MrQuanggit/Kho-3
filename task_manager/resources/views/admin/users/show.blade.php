@extends('admin.master')
@section('content')
    <div class="container">
        <div class="col-12 col-md-12 mt-4">
            <div class="card">
                <h5 class="card-header">Danh sách người dùng</h5>
                <div class="card-body">
                    <a href="{{ route('users.create') }}" class="btn btn-success">Add</a>
                    <table class="table mt-2">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Email</th>
                            <th scope="col">SDT</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $key => $user)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->mail }}</td>
                                <td>{{ $user->phone }}</td>
                                <td><a href="{{ route('users.show',$user->id) }}" style="padding: 5px" class="btn btn-primary">Show</a>
                                    <a href="{{ route('users.edit',$user->id) }}" style="padding: 5px" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('users.destroy',$user->id) }}" style="padding: 5px" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection



