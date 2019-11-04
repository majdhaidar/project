<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Task;
class Project extends Model
{
    //
    protected $fillable = ['title', 'description'];
    //or 
    //protected $guarded = [];

    public function tasks(){
        return $this->hasMany(Task::class);
    }
}
