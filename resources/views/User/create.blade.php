@extends('layout')
@section('content')

    <div class="container d-flex justify-content-center " >
        <form action="{{route('users.store')}}" method="post">
            @csrf
            <h4 class="mb-3"  style="text-align: left;">Create User</h4>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row mb-3">
                <div class="col-3 " >
                    <label for="title">Name</label>
                </div>
                <div class="col-9">
                    <input name="name" type="text" class="form-control" value="{{old('name','')}}">
                </div>
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
                <div class="col-9" style='margin-left: 55%'>
                    <a class="btn btn-danger" href="">Back</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>

    </div>

    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap5',
            format: 'yyyy-mm-dd'

        });
    </script>
@endsection

