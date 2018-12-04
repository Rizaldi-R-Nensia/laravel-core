<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class M_User extends Authenticatable
{
    use Notifiable;
    protected  $fillable = [
        'name', 'email', 'pssword',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
