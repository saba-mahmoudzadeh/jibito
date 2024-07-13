@extends('layout')
@section('content')

    <div class="container d-flex justify-content-center " >
        <form action="{{route('categories.update',$categories->id)}}" method="post">
            {{method_field('PUT')}}
            @csrf
            <div class="row mb-3">
                <div class="col-12">
                    <h4>Update Category</h4>
                </div>

            </div>

            <div class="row mb-3">
                <div class="col-3">
                    <label for="id" >Id</label>
                </div>
                <div class="col-9" style="text-align: left;">
                    {{$categories->id}}
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-3">
                    <label for="title" >Title</label>
                </div>
                <div class="col-9">
                    <input name="title" value="{{old('title', $categories->title)}}" type="text" class="form-control">
                </div>
            </div>



            <div class="row mb-3">
                <div class="col-3">
                    <label for="icon">Icon</label>
                </div>
                <div class="col-9">
                    <input name="icon" type="text" class="form-control" value="{{old('icon', $categories->icon)}}">
                </div>
            </div>
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
                <div class="col-3">
                </div>
                <div class="col-9" style='margin-left: 55%'>
                    <button type="submit" class="btn btn-danger"><a class="white" href="{{route('home.index')}}">Back</a></button>

                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>

    </div>

@endsection
