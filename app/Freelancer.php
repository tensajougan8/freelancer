<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticate;

class Freelancer extends Authenticate
{
    use Notifiable;

    protected $guard = 'freelancer';

    protected $fillable = [
        'fname', 'lname', 'about', 'c_id', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
