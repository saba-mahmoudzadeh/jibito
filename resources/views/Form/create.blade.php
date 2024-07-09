@extends('layout')
@section('content')
    <header>
        <div class="logo">
            <span class="logo-icon"></span> Jibito
        </div>
        <nav>
            <a href="{{route('categories.create')}}">Create</a>
            <a href="#">Home</a>
            <button class="login">Log In</button>
        </nav>
    </header>
    <main>
        <div class="content">
            <div style="color: #00d084"> <h1>Jibito</h1></div>
            <h3>Managing and Organizing Your Wallet</h3>
            <div class="buttons">
                <button class="sign-up">Sign up</button>
                <button class="add">Add</button>
            </div>
        </div>
        <div class="graphics">
            <div>
                <img src="{{asset('img/hero graphics.png')}}" alt="">
            </div>
        </div>
    </main>
@endsection
