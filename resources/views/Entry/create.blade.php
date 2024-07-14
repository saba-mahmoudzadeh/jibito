@extends('layout')
@section('content')

    <div class="container d-flex justify-content-center " >

            <form>

                <div class="row mb-3">
                    <div class="col-5">
                        <h4>Add Entry</h4>
                    </div>
                    <div class="col-7"></div>
                </div>

                <div class="row mb-3">
                    <div class="col-3">
                        <label for="title">Title</label>
                    </div>
                    <div class="col-9">
                        <input name="title" type="text" class="form-control">
                    </div>
                </div>

                <div class="row mb">
                    <div class="col-3">
                        <label for="text" class="col-sm-2 ">Amount</label>
                    </div>
                    <div class="col-9">
                        <input name="title" type="text" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-3">
                    </div>
                    <div class="col-9">
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Income</label>
                        </div>
                        <div class="form-check form-check-inline"  style="margin-top: 10px; margin-bottom: 10px">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Expense</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-3">
                        <label for="inputEmail3" class="col-sm-2 ">Date</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" id="datepicker" width="230">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-3">
                        <label for="inputEmail3" class="col-sm-2 ">Category</label>
                    </div>
                    <div class="col-9">
                        <select class="form-select form-control" id="specificSizeSelect">
                            <option selected class="form-control">Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-3">
                        <label for="inputEmail3" class="col-sm-2 ">Description</label>
                    </div>
                    <div class="col-9">
                        <div class="input-group">
                            <textarea class="form-control" style="padding-left: 30px" aria-label="With textarea"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-3">
                        <label for="formFile" class=" col-sm-2" >file</label>
                    </div>
                    <div class="col-9">
                        <input class="form-control"  type="file" id="formFile">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-3">
                    </div>
                    <div class="col-9" style='margin-left: 55%'>
                        <button type="submit" class="btn btn-danger">Back</button>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>

        </div>

        <script>
            $('#datepicker').datepicker({
                uiLibrary: 'bootstrap5'
            });
        </script>
@endsection
