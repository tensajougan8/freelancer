<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    // public $fillable = [
    //     'job_title', 'about', 'c_id', 'months', 'budget',
    // ];

    public function tags()
    {
    	return $this->belongsToMany(Category::class,'project_tags');
    }

    public function projects()
    {
    	return $this->belongsToMany(Client::class,'client_projects');
    }
}
   
