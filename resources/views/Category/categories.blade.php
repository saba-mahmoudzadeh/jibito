@extends('layout')
@section('content')

    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-3" style="color: #00d084"><h3>Categories</h3></div>
                <div class="col-9">
                    <a href="{{route('categories.create')}}">
                        <button style="background-color: #00d084" class="btn ">Create</button>
                    </a>
                </div>
            </div>
        </div>
        <table class="table table-light table-hover">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Icon</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>@foreach ($categories as $category)
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>
                        <span style="padding-right: 5px;">
                            <i class="bi bi-{{$category->icon}}"></i>
                        </span>
                        <span>{{$category->icon}}</span>
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{route('categories.edit',$category->id)}}">
                            Edit
                        </a>
                        <form action="{{route('categories.destroy',$category->id)}}" method="post" style="display: inline-block;">
                            @csrf
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
