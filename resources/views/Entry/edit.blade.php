@extends('layout')
@section('content')

    <div class="container d-flex justify-content-center " >
        <form action="{{route('entries.update',$entries->id)}}" method="post">
            @csrf
            {{method_field('PUT')}}
            <div class="row mb-3">
                <div class="col-5">
                    <h4>Add Entry</h4>
                </div>
                <div class="col-7"></div>
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
                <div class="col-3 " >
                    <label for="title">Title</label>
                </div>
                <div class="col-9">
                    <input name="title" type="text" value="{{old('title',$entries->title)}}" class="form-control" >
                </div>
            </div>

            <div class="row mb">
                <div class="col-3">
                    <label for="text">Amount</label>
                </div>
                <div class="col-9">
                    <input name="amount" type="text" class="form-control" value="{{old('amount',$entries->amount)}}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-3">
                </div>
                <div class="col-9">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="income"  @if(old('type',$entries->type)=='income')checked @endif   >
                        <label class="form-check-label" for="inlineRadio1">Income</label>
                    </div>

                    <div class="form-check form-check-inline" style="margin-top: 10px; margin-bottom: 10px">
                        <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="expense" @if(old('type',$entries->type)=='expense')checked @endif>
                        <label class="form-check-label" for="inlineRadio2">Expense</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-3">
                    <label for="entry_date">Date</label>
                </div>
                <div class="col-9">
                    <input name="entry_date" type="text" class="form-control" id="datepicker" width="230" value="{{old('entry_date',gmdate('Y-m-d',strtotime($entries->entry_date)))}}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-3">
                    <label for="category_id">Category</label>
                </div>
                <div class="col-9">
                    <select class="form-select form-control" name="category_id" id="specificSizeSelect">
                        <option class="form-control" value="" @if(old('category_id',$entries->category_id)== '')selected @endif>>Choose...</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" @if(old('category_id',$entries->category_id)== $category->id)selected @endif>
                                {{ $category->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-3">
                    <label for="description" >Description</label>
                </div>
                <div class="col-9">
                    <div class="input-group">
                        <textarea  name="description" class="form-control" style="padding-left: 30px" aria-label="With textarea" >{{old('description',$entries->description)}}</textarea>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-3">
                    <label for="file" >file</label>
                </div>
                <div class="col-9">
                    <input name="file" class="form-control"  type="file" id="formFile">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-3">
                </div>
                <div class="col-9" style='margin-left: 55%'>
                    <button type="submit" class="btn btn-primary">Update</button>
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
