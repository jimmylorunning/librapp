<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
  public function calendars() 
  {
    return $this->hasMany('App\Calendar');
  }
}
