@extends('admin.layout.master')
@section('content')
    <div class="container">
        <div class="col-12 col-md-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input name="product_name" value="{{ $product->product_name }}" type="text"
                                   class="form-control @error('product_name') is-invalid @enderror">
                            @error('product_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input name="user_name" value="{{ $product->description }}" type="text"
                                   class="form-control @error('description') is-invalid @enderror">
                            @error('description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>PriceEach</label>
                            <input name="priceEach" type="text" value="{{ $product->priceEach }}"
                                   class="form-control @error('priceEach') is-invalid @enderror" >
                            @error('priceEach')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input name="slug" type="text" value="{{ $product->slug }}"
                                   class="form-control @error('slug') is-invalid @enderror">
                            @error('slug')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Size</label>
                            <input name="size" type="text" value="{{ $product->size }}"
                                   class="form-control @error('size') is-invalid @enderror">
                            @error('size')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Image1</label>
                            <input name="image1" type="file" value="{{ $product->image1 }}"
                                   class="form-control">
                            @error('image1')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Image2</label>
                            <input name="image2" type="file" value="{{ $product->image2 }}" class="form-control">
                            @error('image2')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Image3</label>
                            <input name="image3" type="file" value="{{ $product->image3 }}" class="form-control">
                            @error('image3')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Image4</label>
                            <input name="image4" type="file" value="{{ $product->image4 }}" class="form-control">
                            @error('image4')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Image5</label>
                            <input name="image5" type="file" value="{{ $product->image5 }}" class="form-control">
                            @error('image5')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" id="">
                                @foreach($category as $categories)
                                    <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{route('product.index')}}" class="btn btn-info">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


