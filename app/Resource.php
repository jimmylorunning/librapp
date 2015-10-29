<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
  protected $fillable = ['name', 'pattern', 'target', 'secure'];

  public function roles() {
    $this->belongsToMany('App\Role')->withTimestamps();
  }
}
