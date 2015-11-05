<?php

namespace App\Helpers;

class ResourcePattern
{
  protected $pattern;

  public function __construct($pattern) {
    $this->pattern = $pattern;
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