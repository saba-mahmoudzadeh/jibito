@extends('layout')
<header>
    <div class="logo">
        <span class="logo-icon"></span> Jibito
    </div>
    <nav>
        <a href="#">Services</a>
        <a href="#">Home</a>
        <button class="login">Log In</button>
    </nav>
</header>


@section('content')

<div class="container">
<table class="table table-dark table-hover">
    <thead>
    <tr>
        <th scope="col">Icon</th>
        <th scope="col">Title</th>

    </tr>
    </thead>
    <tbody>
    <tr>@foreach ($categories as $category)

        <td> {{$category->icon}}</td>
        <td>{{$category->title}}</td>

    </tr>


    @endforeach
    </tbody>
</table>
</div>
@endsection
