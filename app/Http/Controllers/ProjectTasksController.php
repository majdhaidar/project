<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;
class ProjectTasksController extends Controller
{
    //
    public function store(Request $request, Project $project){
        //dd($request->all());
        $request->validate([
            'description'=>['required', 'min:10']
        ]);
        //dd($request->description);
        $project->createTask($request->description);
        return back();
    }
}
