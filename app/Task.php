<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    //SET WHICH FIELDS CAN BE FILLED AND UPDATED
    protected $fillable = ['project_id','description', 'completed'];
    //SET RELATION BETWEEN TWO MODELS TASKS AND PROJECTS
    public function project(){
        return $this->belongsTo(Project::class);
    }
    //FUNCTION TO UPDATE TASK AS COMPLETED
    public function completed(){
        $this->update([
            'completed'=>true
        ]);
    }
    //FUNCTION TO UPDATE CLASS AS INCOMPLETED
    public function inCompleted(){
        $this->update([
            'completed'=>false
        ]);
    }
}
