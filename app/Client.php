<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticate;

class Client extends Authenticate
{
    use Notifiable;

    protected $guard = 'client';

    protected $fillable = [
        'fname', 'lname', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function projects()
    {
    	return $this->belongsToMany(Project::class,'client_projects');
    }
}
