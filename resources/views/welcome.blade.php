@extends('layout')
@section('title', 'Home')
    
@section('bodyContent')
    <h2>hello world</h2>
    <ul>
        @foreach ($tasks as $task)
            <li>{{$task}}</li>
        @endforeach
    </ul>
@endsection
