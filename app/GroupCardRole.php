<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupCardRole extends Model
{
    public function group() {
        return $this->belongsTo('App\Group');
    }

    public function users() {
    	return $this->hasManyThrough('App\User','App\CardUserRole','group_card_role_id','id','id','user_id');
    }
}
