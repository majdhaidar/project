@extends('layout')

@section('content')
<h1>Create new project</h1>
<div>
    <form action="/projects" method="POST">
        {{ csrf_field() }}
        <p><input class="form-control" type="text" name="title" placeholder="Project Title"></p>
        <p><textarea class="form-control" name="description" placeholder="Project Description" id="" cols="30" rows="10"></textarea></p>
        <p><button type="submit" class="btn btn-success">Create Project</button></p>
    </form>
</div>
@endsection