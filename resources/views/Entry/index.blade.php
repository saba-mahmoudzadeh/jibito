
@extends('layout')
@section('content')
    <div class="container" style="max-width: 430px;">

        <div class="row mb-2">
            <div class="col-4">
                <div>  <p style="display:inline-block;font-size: larger;font-weight: bold; ">Saba Mhz</p></div>
            </div>
            <div class="col-8">
                <div><p style=" color: #69E6A6; display:inline-block;font-weight: bold;font-size: 1.5em;margin-left: 100px">+126.54</p></div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <div>
                    <button class="btn btn-secondary" >Add Entry</button>
                </div>        </div>
            <div class="col-8">
            </div>
        </div>

        @foreach($entries as $entry)

        <div class="card" style="color: black; padding:8px;margin-left: 8px;margin-bottom: 5px">
            <div class="row">
                <div class="col-3">
               @if ($entry->type == 'income')
                    <div class="income justify-content-center" style="border-radius: .25rem;  background-color: #69E6A6;">
                        <span class="align-self-center" style="font-size: 1.4rem; font-weight: bold;">+{{$entry->amount}}</span>

                        @else
                            <div class="income justify-content-center" style="border-radius: .25rem;  background-color: red;">
                                <span class="align-self-center" style="font-size: 1.4rem; font-weight: bold;">-{{$entry->amount}}</span>
                                @endif


                    </div>

                </div>
                <div class="col-6">
                    <div style="margin-left: -10px; text-align: left">
                        <div style=" margin-top: 0.2rem; font-size: 1.1rem;font-weight: bold">{{$entry->title}}</div>
                        <div style="font-size: 0.75rem; color: #888; margin-top: 0.3rem;">{{$entry->description}}</div>
                    </div>
                </div>

                <div class="col-3">
                    <div style="text-align: center; font-size: 0.7rem; color: #555; margin-top: 0.9rem;">{{gmdate('d-m-Y')}}</div>

                    <div style="text-align: center; margin-top: 0.8rem;"><i class="bi bi-{{$entry->category->icon}}" data-toggle="tooltip" data-placement="top" title="{{$entry->category->title}}"></i></div>



                </div>
            </div>
        </div>
    @endforeach
@endsection
