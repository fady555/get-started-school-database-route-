<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
    use Notifiable;

    protected $table = "users";
    protected $fillable = [
        'name',
        'username',
        'jop_description',
        'email',
        'password_resets',
        'password',
        'api_token',
        'permission',
    ];
    /*protected $hidden = [
            'password', 'remember_token','api_token'
        ];*/

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
