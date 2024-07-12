@extends('layout')

@section('content')

<div class="container">
    <div class="content">
        <div class="row">
        <div class="col-3" style="color: #00d084"><h3>Categories</h3></div>
        <div class="col-9"><a href=""><button  style="background-color: #00d084" class="btn ">Create</button></a></div>
    </div>
    </div>
<table class="table table-light table-hover"  >
    <thead>
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Icon</th>
        <th scope="col">Action</th>

    </tr>
    </thead>
    <tbody>
    <tr>@foreach ($categories as $category)
        <td>{{$category->title}}</td>
        <td><div>{{$category->icon}}</div> <div><i class="bi bi-{{$category->icon}}"></i></div> </td>
        <td>
            <div class="row">
                <div class="col-2"></div>
                    <div class="col-2"></div>
                <div class="col-4"> <form action="{{route('categories.destroy',$category->id)}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <a href="{{route('categories.destroy',$category->id)}}"> <button class="btn btn-danger">delete</button></a>
                    </form></div>
                <div class="col-4"><a href="{{route('categories.edit',$category->id)}}"><button class="btn btn-warning" >edit</button>  </a></div>

            </div>

        </td>



    </tr>


    @endforeach
    </tbody>
</table>
</div>
@endsection
