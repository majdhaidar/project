@extends('layout')

@section('content')
<h1>{{$project->title}}</h1>
<p>
    {{$project->description}}
</p>
@if ($project->tasks->count())
    <ul class="list-group">
        @foreach ($project->tasks as $task)
            <li class="list-group-item">{{$task->description}}</li>
        @endforeach
    </ul>
@endif
<p>
    <a href="/projects/{{$project->id}}/edit">Edit</a>    
</p>
@endsection