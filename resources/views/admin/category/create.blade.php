@extends('admin.master')

@section('title', 'Add Category')

@section('content')
    <div class="container-fluid px-4 py-4">
        <div class="row g-4">
            <div class="col-12 col-sm-8 offset-sm-2">
                <h1 class="text-center">Add Category</h1>
                @include('notify')
                <form action="{{route('category.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                        <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </form>
            </div>
        </div>
    </div>
@endsection
