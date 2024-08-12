@extends('layout')
@section('content')

    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-3" style="color: #00d084"><h3>Users</h3></div>
                <div class="col-9">
                    <a href="{{route('users.create')}}">
                        <button style="background-color: #00d084" class="btn ">Create</button>
                    </a>
                </div>
            </div>
        </div>
        <table class="table table-light table-hover">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>@foreach ($users as $user)
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>

                    <td>
                        <a class="btn btn-warning" href="{{route('users.edit',$user->id)}}">
                            Edit
                        </a>
                        <form action="{{route('users.destroy',$user->id)}}" method="post" style="display: inline-block;">
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
