<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Task;
use Illuminate\Support\Facades\Request;

class Project extends Model
{
    //
    protected $fillable = ['title', 'description'];
    //or 
    //protected $guarded = [];

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function createTask($description){
        // return Task::create([
        //     'project_id'=>$this->id,
        //     'description'=>$description
        // ]);
        // REPLACE ABOVE BY
        //dd($description);
        $this->tasks()->create(['description'=>$description]);
    }
}
