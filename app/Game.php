<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

  public function players()
  {
    return $this->hasMany('App\Player');
  }
  public function round()
  {
    return $this->hasOne('App\Round');
  }
}
