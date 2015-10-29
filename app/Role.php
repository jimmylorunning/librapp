<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $fillable = ['name'];

  public function users()
  {
    return $this->belongsToMany('App\User');
  }

  public function resources()
  {
    return $this->belongsToMany('App\Resource')->withTimestamps();
  }
}
