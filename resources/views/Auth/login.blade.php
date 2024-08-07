@extends('layout')
@section('content')

    <div class="container d-flex justify-content-center " >
        <form action="{{route('login.store')}}" method="post">
            @csrf
            <h4 class="mb-3"  style="text-align: left;">Welcome Back</h4>
            <div class="row mb-3">

            </div>

            <div class="row mb-3">
                <div class="col-3">
                    <label for="text">Email</label>
                </div>
                <div class="col-9">
                    <input name="email" type="email" class="form-control" value="{{old('email','')}}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-3">
                    <label for="text">Password</label>
                </div>

                <div class="col-9">
                    <input name="password" type="text" class="form-control" value="{{old('password','')}}">
                </div>


            </div>


            <div class="row mb-3">
                <div class="col-3">
                </div>
                <div class="col-9" style='margin-left: 20%'>
                    <a href="{{route('register')}}" class="sign-up" style="text-decoration: none">Register</a>
                    <button type="submit" class="login">Login</button>
                </div>

            </div>
            <div class="row mb-3">
                <div class="col-12">
                    @if ($errors->any())
                        <div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </form>


@endsection


    </div>
