<?php

namespace App;

use App\Helpers\ResourcePattern;
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

  public function hasAccessToPath($request_path, $method)
  {
    $resource_pattern = new ResourcePattern();
    foreach ($this->resources as $resource)
    {
      $resource_pattern->setResource($resource);
      if ($resource_pattern->matches($request_path, $method))
      {
        return true;
      }
    }
    return false;
  }
}
