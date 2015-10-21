<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
  protected $fillable = ['name', 'description', 'starts', 'ends'];

  public function getStartsAttribute($date) {
    return new Carbon($date);
  }

  public function getEndsAttribute($date) {
    return new Carbon($date);
  }

  public function calendars()
  {
    return $this->belongsToMany('App\Calendar');
  }
}
