<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
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
            <h5 class="card-header">Add Staff</h5>
            <div class="card-body">
                <form action="{{route('staff.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input name="name" value="{{ old('name') }}" type="text"
                               class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Date Of Birth</label>
                        <input name="date" type="date" class="form-control @error('date') is-invalid @enderror">
                        @error('date')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <select name="gender" id="">
                            <option value="Nam">Nam</option>
                            <option value="Nu">Nu</option>
                        </select>
                        <input name="gender" value="{{ old('gender') }}" type="text"
                               class="form-control @error('gender') is-invalid @enderror">
                        @error('gender')
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
                        <label>CMND</label>
                        <input name="cmnd" value="{{ old('cmnd') }}" type="text"
                               class="form-control @error('cmnd') is-invalid @enderror">
                        @error('cmnd')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" value="{{ old('email') }}" type="text"
                               class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input name="address" value="{{ old('address') }}" type="text"
                               class="form-control @error('address') is-invalid @enderror">
                        @error('address')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Group Staff</label>
                            <div class="form-check">
                                <select name="group_id" id="">
                                    @foreach($group_staffs as $group_staff)
                                        <option value="{{$group_staff->id}}">{{$group_staff->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Create</button>
                        <a href="{{ route('staff.index') }}" class="btn btn-info">Back</a>
                    </div>
                </form>
            </div>
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
