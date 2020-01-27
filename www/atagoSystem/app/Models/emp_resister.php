<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class emp_resister extends Authenticatable
{
    //

    use Notifiable;
    
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [

        'password', 'remember_token',

    ];
}
