@extends('layout')
@section('content')

    <div class="container" style="max-width: 430px;">

        <div class="row mb-2">
            <div class="col-4">
                <div>  <p style="display:inline-block;font-size: larger;font-weight: bold; ">Saba Mhz</p></div>
            </div>
            <div class="col-8">
                @if($totalAmount > 0)
                <div><p style=" color: #69E6A6; display:inline-block;font-weight: bold;font-size: 1.5em;margin-left: 100px">+{{$totalAmount}} </p></div>
                @else
                    <div><p style=" color: #69E6A6; display:inline-block;font-weight: bold;font-size: 1.5em;margin-left: 100px">-{{$totalAmount}} </p></div>
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

        <div class="card" style="color: black; padding:8px;margin-left: 8px;margin-bottom: 10px">
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
                        <div style="font-size: 0.75rem; color: #888; margin-top: 0.3rem;">
                            @if(strlen($entry->description)<30)
                                <div >{{$entry->description}}</div>
                            @else
                                <div  data-toggle='tooltip' data-placement='top' title='{{$entry->description}}'>{{substr($entry->description,0,30)."..."}}</div>

                            @endif
                            </div>
                    </div>
                    <div><a class="btn btn-warning" href="{{route('entries.edit',$entry->id)}}">Edit</a></div>
                    <form action="{{route('entries.destroy',$entry->id)}}" method="post">

                        {{method_field('DELETE')}}
                        @csrf
                        <div><button class="btn btn-danger" >Delete</button></div>
                    </form>


                </div>

                <div class="col-3">
                    <div style="text-align: center; font-size: 0.7rem; color: #555; margin-top: 0.2rem;">{{gmdate('Y-m-d',strtotime($entry->entry_date))}}</div>

                    <div style="text-align: center; margin-top: 0.8rem;"><i class="bi bi-{{$entry->category->icon}}" data-toggle="tooltip" data-placement="top" title="{{$entry->category->title}}"></i></div>



                </div>
            </div>
        </div>
    @endforeach
@endsection
