<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  protected $fillable = ['name', 'description', 'starts', 'ends'];

  public function calendars()
  {
    return $this->belongsToMany('App\Calendar');
  }
}
