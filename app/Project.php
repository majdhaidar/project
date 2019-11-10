<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Task;
use Illuminate\Support\Facades\Request;

class Project extends Model
{
    //SET FIELDS THAT CAN BE FILLED WITH USER INPUT
    protected $fillable = ['title', 'description'];
    //SET MODEL RELATION BETWEEN PROJECTS AND TASKS
    public function tasks(){
        return $this->hasMany(Task::class);
    }
    //FUNCTION TO CREATE TASK FOR SPECIFIC PROJECT
    public function createTask($description){
        $this->tasks()->create(['description'=>$description]);
    }
    //UPDATE PROJECT TITLE AND DESCRIPTION
    public function updateProject($title, $description){
        $this->update([
            'title'=>$title,
            'description'=>$description
        ]);
    }
}
