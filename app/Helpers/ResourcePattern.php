<?php

namespace App\Helpers;

class ResourcePattern
{
  protected $pattern;
  protected $method;

  public function __construct(){
  }

  public function setResource($resource)
  {
    $this->pattern = $resource->pattern;
    $this->method = $resource->verb;
  }

  public function matches($path, $method)
  {
    return ($this->pregMatch($path) && (strcasecmp($this->method, $method)) == 0);
  }

  public function pregMatch($path) {
    $pattern_regex = $this->getRegex();
    return preg_match($pattern_regex, $path);
  }

  public function getRegex() 
  {
    $has_id = "/(.*)\{\w+\}(.*)/i";
    if (preg_match($has_id, $this->pattern)) {
      $replacement = '${1}\w+${2}';
      $newpreg = preg_replace($has_id, $replacement, $this->pattern);
      return $this->addRegexSlashes($newpreg);
    }
    return $this->addRegexSlashes($this->pattern);
  }

  protected function addRegexSlashes($string, $switches='i')
  {
    return '/\A' . str_replace('/', '\/', $string) . "\z/$switches";
  }
}