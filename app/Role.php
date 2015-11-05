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
    foreach ($this->resources as $resource)
    {
      $rpattern = new ResourcePattern($resource->pattern);
      if ($rpattern->pregMatch($request_path) && ($resource->verb == $method)) 
      {
        return true;
      }
    }
    return false;
  }
}
