@extends('admin.layout.master')
@section('content')
    <div class="container">
        <div class="col-12 col-md-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" value="{{ old('name') }}" type="text"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input name="description" value="{{ old('description') }}" type="text"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Create</button>
                            <a href="{{route('category.index')}}" class="btn btn-info">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

