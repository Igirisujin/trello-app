<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupRole extends Model
{
	public function group() {
        return $this->belongsTo('App\Group');
    }

    public function roles() {
        return $this->hasMany('App\GroupUserRole');
    }

    public function groupUserRoles() {
        return $this->hasMany('App\GroupUserRole');
    }
}
