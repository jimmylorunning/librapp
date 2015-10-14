<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Calendar extends Model
{
  protected $fillable = ['name', 'starts', 'ends', 'audience'];

  public function getStartsAttribute($date) {
    return new Carbon($date);
  }

  public function getEndsAttribute($date) {
    return new Carbon($date);
  }
}
