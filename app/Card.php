<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function group() {
        return $this->belongsTo('App\Group');
    }

    public function tags() {
    	return $this->hasMany('App\CardTag');
    }

    public function cardUserRoles() {
    	return $this->hasMany('App\CardUserRole');
    }

    public function users() {
        return $this->hasManyThrough('App\User','App\CardUserRole','card_id','id','id','user_id');
    }
}
