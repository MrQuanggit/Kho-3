<!doctype html>
<html lang="en">
<head>
    <title>Exam3</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="col-12 col-md-12 mt-4">
        <div class="card">
            <a href="{{route('staff.index')}}"><h5 class="card-header">Staff List</h5></a>
            <div class="col-12">
            </div>
            <div class="card-body">
                <a href="{{route('staff.create')}}" class="btn btn-success">+ Add Staff</a>
                <form action="{{ route('staff.search') }}" style="float: right" method="get">
                    @csrf
                    <input name="search" type="text" value="{{ isset($search) ? $search : '' }}"
                           placeholder="Search for ..">
                    <button class="btn btn-dark" type="submit">Search</button>
                </form>
                <table class="table mt-2">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Group</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($staff as $key => $staffs)
                        <tr>
                            <td scope="row">{{ $key + 1 }}</td>
                            <td>{{ $staffs->name }}</td>
                            <td>{{ $staffs->gender }}</td>
                            <td>{{ $staffs->phone }}</td>
                            <td>
                                @if($staffs->group_id == 1)
                                    Admin
                                @else
                                    Staff
                                @endif
                                </td>
                            <td><a href="{{route('staff.edit', $staffs->id)}}" style="padding: 5px"
                                   class="btn btn-warning">Edit</a>
                                <a href="{{route('staff.destroy', $staffs->id)}}" style="padding: 5px"
                                   class="btn btn-danger"
                                   onclick="return confirm('Do you want to delete this staff?')">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div style="text-align: center"></div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
