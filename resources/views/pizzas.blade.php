@extends('layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Pizzas List
                </div>

                <p>{{$name}}</p>
                <p>{{$age}}</p>

                @foreach($pizzas as $pizza)
                    <div>
                       {{$loop->index+1}}.{{ $pizza['type'] }} - {{$pizza['base']}}
                    </div>
                @endforeach
            </div>
        </div>
@endsection
