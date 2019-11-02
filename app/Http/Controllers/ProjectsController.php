<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $project = new Project();
        // $project->title = request('title');
        // $project->description = request('description');
        // $project->save();
        //REPLACE THE ABOVE CODE WITH
        // Project::create([
        //     'title'=>request('title'),
        //     'description'=>request('description')
        // ]);
        //OR REPLACE THE ABOVE BY
        // $request->validate([
        //     'title'=>['required', 'min:3', 'max:50'],
        //     'description'=>['required', 'min:10']
        // ]);
        // Project::create($request->all());
        //REPLACE ABOVE TO BELOW
        $validate =$request->validate([
            'title'=>['required', 'min:3', 'max:50'],
            'description'=>['required', 'min:10']
        ]);
        Project::create($validate);
        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        //dd($project->title);
        return view('projects.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
        //dd($request);
        // $project->title = $request->title;
        // $project->description = $request->description;
        // $project->save();
        //REPLACE ABOVE WITH
        $project->update([
            'title'=>$request->title,
            'description'=>$request->description]);
        return redirect('/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
        //dd($project->title);
        $project->delete();
        return redirect('/projects');
    }
}
