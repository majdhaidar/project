@extends('layout')

@section('content')
<h1>Edit Project</h1>
<form method="POST" action="/projects/{{$project->id}}">
        {{ csrf_field() }}
        {{method_field('PATCH')}}
        <div class="form-group">
          <label for="Title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$project->title}}">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{$project->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Project</button>
</form>
<form action="/projects/{{$project->id}}" method="POST">
  {{-- {{ csrf_field() }}
  {{method_field('DELETE')}} --}}
  @csrf
  @method('DELETE')
  <button type="submit" class="btn btn-danger mt-2">Delete</button>
</form>
@endsection
