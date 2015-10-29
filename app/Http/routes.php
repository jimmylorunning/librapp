<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);

$resources = App\Resource::all();

foreach ($resources as $resource)
{
  $new_route = Route::match([$resource->verb],$resource->pattern, [
    "as"   => $resource->name,
    "uses" => $resource->target
  ]);
  if ($resource->secure) {
    $new_route->middleware(['auth']);
  }
}

