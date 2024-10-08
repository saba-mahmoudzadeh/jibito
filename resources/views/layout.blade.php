<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body class="d-flex h-100 text-center text-white" style="background-color: #00063F">
@if (Auth::check())
<header>

    <div class="logo">
        <?php
            $user=auth()->user();
            ?>
        <span class="logo-icon"></span>{{ucfirst($user->name)}}

        @yield('nav')
    </div>

    <nav>
        <a href="{{route('home.index')}}">Home</a>
        <a href="{{route('dashboard')}}">Dashboard</a>
        @if(auth()->user()->role == 'admin') <a href="{{route('categories.index')}}">Categories</a> @endif
        <a href="{{route('entries.index')}}">Entries</a>
        @if(auth()->user()->role == 'admin') <a href="{{route('users.index')}}">Users</a> @endif

    </nav>
</header>
@else
    <header>
        <div class="logo">
            <span class="logo-icon"></span> Jibito
        </div>
        <nav>
            <a href="{{route('home.index')}}">Home</a>
            <a href="{{route('categories.index')}}">Categories</a>
            <a href="{{route('entries.index')}}">Entries</a>
            <a href="{{route('users.index')}}">Users</a>

            <a class="login" href="{{route('login')}}">Login</a>
            <a href="{{route('register')}}" class="sign-up">Register</a>
        </nav>

    </header>
@endif
@yield('content')





<script src="{{asset('js/script.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
</body>

