<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function roles() {
        return $this->hasMany('App\GroupRole');
    }

    public function users() {
        return $this->hasManyThrough('App\User','App\GroupUserRole','group_id','id','id','user_id');
    }
}
