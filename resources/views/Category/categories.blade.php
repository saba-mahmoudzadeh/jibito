@extends('layout')

@section('content')

<div class="container">
    <div class="content">
        <div style="color: #00d084"><h3>Categories</h3></div>
    </div>
<table class="table table-dark table-hover">
    <thead>
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Icon</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>

    </tr>
    </thead>
    <tbody>
    <tr>@foreach ($categories as $category)

        <td>{{$category->title}}</td>
        <td>{{$category->icon}}</td>
        <td>
            <form action="{{route('categories.destroy',$category->id)}}" method="post">
            @csrf
                {{method_field('DELETE')}}
            <button class="btn btn-danger" style="background-color: red" >delete</button>
            </form>

        </td>
        <td><button class="btn btn-warning">edit</button></td>

    </tr>


    @endforeach
    </tbody>
</table>
</div>
@endsection
