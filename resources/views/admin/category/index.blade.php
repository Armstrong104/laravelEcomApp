@extends('admin.master')

@section('title', 'Manage Category')

@section('content')
    <div class="container-fluid px-4 py-4">
        <div class="row g-4">
            <div class="col-12">
                <h1 class="text-center">Manage Category</h1>
                @include('notify')
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Sl No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$category->name}}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{route('category.edit',$category->id)}}" class="btn btn-sm btn-outline-success"><i class="fa fa-edit"></i></a>
                                        <form action="{{route('category.destroy',$category->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
