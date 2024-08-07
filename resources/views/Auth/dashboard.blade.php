@extends('layout')
@section('content')

<!-- Bootstrap JS and dependencies -->
<style>
    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
    }
    .card img {
        border-radius: 50%;
        width: 100px;
        height: 100px;
        margin-bottom: 10px;
    }
    .card-title {
        font-size: 1.25rem;
        margin-bottom: 10px;
    }
    .card-subtitle {
        font-size: 0.875rem;
        color: #6c757d;
        margin-bottom: 20px;
    }
    .card-text {
        margin-bottom: 20px;
    }
    .social-icons a {
        font-size: 1.25rem;
        margin: 0 10px;
        color: #007bff;
    }
    .stats {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }
    .stats div {
        text-align: center;
    }
    .stats h5 {
        margin: 0;
    }
    .btn-primary {
        border-radius: 50px;
        padding: 10px 20px;
    }
</style>


<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 400px;">
        <img style="align-self: center" src="{{asset('img/profileImg.png')}}" alt="User Image">
        <h5 class="card-title">{{$users->name}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$users->email}}</h6>
        <div class="social-icons mb-3">

        </div>
        <form method="POST" action={{ route('logout') }} >
            @csrf
            <button class="sign-up" style="margin-bottom:10px; align-self: center" type="submit">Logout</button>
        </form>
        <div class="stats mt-3">
            <div>
                <h5></h5>
                <p class="text-muted"></p>
            </div>
            <div>
                <h5></h5>
                <p class="text-muted"></p>
            </div>
            <div>
                <h5></h5>
                <p class="text-muted"></p>
            </div>
        </div>
    </div>
</div>
@endsection








