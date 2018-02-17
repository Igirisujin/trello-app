<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupUserRole extends Model
{
	public function group() {
        return $this->belongsTo('App\Group');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function role() {
        return $this->belongsTo('App\GroupRole');
    }
}