<?php

namespace App\Providers;

use Illuminate\Html\HtmlServiceProvider;

class MacroServiceProvider extends HtmlServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
      parent::register();
      // load macros
      require base_path() . '/resources/macros/macros.php';      
    }
}
