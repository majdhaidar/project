@extends('layout')

@section('content')
<h1>Projects</h1>
<p><a href="/projects/create" class="btn btn-primary">Create new project</a></p>
<ul class="list-group">
    @foreach ($projects as $project)
    <li class="list-group-item"><a href="/projects/{{$project->id}}">{{$project->title}}</a></li>    
    @endforeach
</ul>
@endsection