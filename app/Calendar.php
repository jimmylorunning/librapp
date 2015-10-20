<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Calendar extends Model
{
  protected $fillable = ['name', 'starts', 'ends', 'audience_id'];

  public function getStartsAttribute($date) {
    return new Carbon($date);
  }

  public function getEndsAttribute($date) {
    return new Carbon($date);
  }

  public function audience()
  {
    return $this->belongsTo('App\Audience', 'audience_id');
  }

  public function events()
  {
    return $this->belongsToMany('App\Event');
  }
}
