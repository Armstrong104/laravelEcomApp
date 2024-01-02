@extends('admin.master')

@section('title', 'Edit Product')

@section('content')
    <div class="container-fluid px-4 py-4">
        <div class="row g-4">
            <div class="col-12 col-sm-8 offset-sm-2">
                <h1 class="text-center">Edit Product</h1>
                @include('notify')
                <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select name="category_id" class="form-control">
                            <option value="" disabled selected>-- Select Category --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected($category->id == $product->category_id)>{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        <span
                            class="text-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : '' }}</span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                        <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" value="{{ $product->price }}">
                        <span class="text-danger">{{ $errors->has('price') ? $errors->first('price') : '' }}</span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Quantity</label>
                        <input type="number" class="form-control" name="quantity" value="{{ $product->quantity }}">
                        <span class="text-danger">{{ $errors->has('quantity') ? $errors->first('quantity') : '' }}</span>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection
