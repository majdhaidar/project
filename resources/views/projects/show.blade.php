@extends('layout')

@section('content')
<h1>{{$project->title}}</h1>
<p>
    {{$project->description}}
</p>
@if ($project->tasks->count())
    <ul class="list-group">
        @foreach ($project->tasks as $task)
            <li class="list-group-item">
                <form action="\tasks\{{$task->id}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="btn-group">
                        <p class="{{$task->completed?'is-complete':''}}">
                            <input class="" type="checkbox" name="completed" {{$task->completed?'checked':''}} id="completed" autocomplete="off" onchange="this.form.submit()">{{$task->description}}
                        </p>
                    </div>
                </form> 
            </li>
        @endforeach
    </ul>
@endif
<p>
    <a href="/projects/{{$project->id}}/edit">Edit</a>    
</p>
<form action="/projects/{{$project->id}}/task" method="post">
    @csrf
    <p><input class="form-control" type="text" name="description" placeholder="Task Description"></p>
    <button type="submit" class="btn btn-success" autocomplete="off">Add New Task</button>
</form>
@endsection