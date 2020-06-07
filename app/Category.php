<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function freelancers()
    {
    	return $this->belongsTo(Freelancer::class,'freelancer_tags');
    }

    public function projects()
    {
    	return $this->belongsToMany(Project::class,'project_tags');
    }
}
