@extends('layout')
@section('content')

    <div class="container" style="max-width: 430px;">

        <div class="row mb-2">
            <div class="col-4">
                <div>  <p style="display:inline-block;font-size: larger;font-weight: bold; ">{{auth()->user()->name}}</p></div>
            </div>
            <div class="col-8">
                @if($totalAmount > 0)
                <div><p style=" color: #69E6A6; display:inline-block;font-weight: bold;font-size: 1.5em;margin-left: 100px">+{{$totalAmount}} </p></div>
                @else
                    <div><p style=" color: #69E6A6; display:inline-block;font-weight: bold;font-size: 1.5em;margin-left: 100px">{{$totalAmount}} </p></div>
                @endif
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <div>
                    <a class="btn btn-secondary" href="{{route('entries.create')}}">Add Entry</a>
                </div>        </div>
            <div class="col-8">
            </div>
        </div>

        @foreach($entries as $entry)
            <div style="position: relative;">
                <div class="card" style="color: black; padding:8px;margin-left: 8px;margin-bottom: 10px;">
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
                            <div style=" margin-top: 0.2rem; font-size: 1.1rem;font-weight: bold">
                                <i class="bi bi-{{$entry->category->icon}}" data-toggle="tooltip" data-placement="top" title="{{$entry->category->title}}" style="font-size: 0.9rem; padding-right: 5px;"></i>
                                {{$entry->title}}
                            </div>
                            <div style="font-size: 0.75rem; color: #888; margin-top: 0.3rem;">
                                @if(strlen($entry->description)<30)
                                    <div >{{$entry->description}}</div>
                                @else
                                    <div  data-toggle='tooltip' data-placement='top' title='{{$entry->description}}'>{{substr($entry->description,0,30)."..."}}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div style="text-align: center; font-size: 0.7rem; color: #555; margin-top: 0.2rem;">{{gmdate('Y-m-d',strtotime($entry->entry_date))}}</div>
                        <div style="margin-top: 0.5rem;">
                            <a href="{{route('entries.edit',$entry->id)}}"><i class="bi bi-pencil-square" style="color: black;"></i></a>
                            <form style="display: inline-block;" action="{{route('entries.destroy',$entry->id)}}" method="post">

                                {{method_field('DELETE')}}
                                @csrf
                                <button style="border: none;background-color: white"><i class="bi bi-x"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
@endsection
