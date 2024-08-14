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
                    Banned
                </div>

                <div class="col-9">
                    <div class="form-group">
                        <label for="banned"></label>
                        <div class="col-9">
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="banned" id="banned" value="1"   {{ 'banned' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                            </div>

                            <div class="form-check form-check-inline"  style="margin-top: 10px; margin-bottom: 10px">
                                <input class="form-check-input" type="radio" name="banned" id="banned" value="0"    {{ 'banned' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <div class="row mb-3">
                <div class="col-3">
                   Role
                </div>

                <div class="col-9">
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="role" id="inlineRadio1" value="admin" @if(old('role','')=='admin') checked @endif>
                        <label class="form-check-label" for="inlineRadio1">Admin</label>
                    </div>

                    <div class="form-check form-check-inline"  style="margin-top: 10px; margin-bottom: 10px">
                        <input class="form-check-input" type="radio" name="role" id="inlineRadio2" value="customer" @if(old('role','')=='customer') checked @endif>
                        <label class="form-check-label" for="inlineRadio2">Customer</label>
                    </div>
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

