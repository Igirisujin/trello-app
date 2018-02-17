<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupCardTag extends Model
{
    public function group() {
        return $this->belongsTo('App\Group');
    }

    public function cardTags() {
    	return $this->hasMany('App\CardTags');
    }
}
