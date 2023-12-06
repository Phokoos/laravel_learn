@extends('layouts.app')

@section('content')

    <h1>Post</h1>

    @if(count($people))
        <ul>
            @foreach($people as $person)
                <li>{{$person}}</li>
            @endforeach
        </ul>
    @endif
@stop

@section('footer')
    <script>
        console.log('Work')
    </script>
@stop

