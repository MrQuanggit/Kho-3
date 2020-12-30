@extends('admin.layout.master')
@section('page-title','Users List')
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
                                    @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
                                    <a href="{{route('users.create')}}" class="btn btn-success">+ Add User</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table" class="text-center table table-striped">
                                <thead>
                                <tr>
                                    <th>No .</th>
                                    <th>Fullname</th>
                                    <th>Image</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Option</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @forelse($users as $key => $user)
                                        <td>{{$key + 1}}</td>
                                        <td>{{$user->name}}</td>
                                        <td><img style="width: 100px; height: 100px"
                                                 src="@if($user->getUserImage() == 'https://quangvoc8.s3.amazonaws.com/')
                                                     https://st.quantrimang.com/photos/image/072015/22/avatar.jpg
                                                   @else
                                                 {{$user->getUserImage()}}
                                                 @endif"
                                                 class="img-border-radius avatar-40 img-fluid"></td>
                                        <td>{{$user->user_name}}</td>
                                        <td>{{$user->user_email}}</td>
                                        <td>{{$user->role->name}}</td>
                                        <td>{{$user->status}}</td>
                                        <td>
                                            @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
                                            <a href="{{route('users.edit', $user->id)}}" style="padding: 5px"
                                               class="btn btn-warning">Edit</a>
                                            <a href="{{route('users.destroy', $user->id)}}" style="padding: 5px"
                                               class="btn btn-danger"
                                               onclick="return confirm('Do you want to delete this user?')">Delete</a>
                                            @endif</td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No Information</td>
                                    </tr>
                                @endforelse
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No .</th>
                                    <th>Fullname</th>
                                    <th>Image</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
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
