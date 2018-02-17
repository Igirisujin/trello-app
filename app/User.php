<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function groupUserRoles() {
        return $this->hasMany('App\GroupUserRole');
    }

    public function cardUserRoles() {
        return $this->hasMany('App\CardUserRole');
    }

    public function groups() {
        return $this->hasManyThrough('App\Group','App\GroupUserRole', 'user_id','id','id','group_id');
    }
}
