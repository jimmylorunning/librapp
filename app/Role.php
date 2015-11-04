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
    return $this->belongsToMany('App\Resource');
  }

  public function hasAccessToPath($request_path)
  {
    foreach ($this->resources as $resource)
    {
      if ($resource->pattern == $request_path)
      {
        return true;
      }
    }
    return false;
  }
}
