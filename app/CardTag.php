<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardTag extends Model
{
    public function groupCardTag() {
        return $this->belongsTo('App\GroupCardTag');
    }

    public function card() {
        return $this->belongsTo('App\Card');
    }
}
