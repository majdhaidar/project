<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class ProjectsController extends Controller
{
    //
    public function index(){
        $projects = Project::all();
        //return $projects;
        return view('projects.index', compact('projects'));
    }
    
    public function create(){
        return view('projects.create');
    }

    public function store(){
        //return request()->all();
        $project = new Project();
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        return redirect('/projects');
    }

    public function show(){}
}
