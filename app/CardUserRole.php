<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardUserRole extends Model
{
	public function card() {
        return $this->belongsTo('App\Card');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function groupCardRole() {
        return $this->belongsTo('App\GroupCardRole');
    }

}
