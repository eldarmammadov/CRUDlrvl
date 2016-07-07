<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Note;

class Card extends Model
{
    public function notes(){
      return $this->hasMany(Note::class);
      // return $this->hasMany('App\Note');
    }
}
