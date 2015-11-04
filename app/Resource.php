<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
  protected $fillable = ['name', 'pattern', 'target', 'secure'];

  public function roles() {
    return $this->belongsToMany('App\Role');
  }
}
