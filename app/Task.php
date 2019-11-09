<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    //
    protected $fillable = ['project_id','description', 'completed'];
    public function project(){
        return $this->belongsTo(Project::class);
    }
}
