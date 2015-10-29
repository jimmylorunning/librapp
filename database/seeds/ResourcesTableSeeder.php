<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Resource;

class ResourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $resources = array_merge(
        $this->resourceRoutes('calendars'),
        $this->resourceRoutes('events'),
        $this->resourceRoutes('roles'));

      foreach($resources as $resource) {
        Resource::create($resource);
      }
    }

    private function resourceRoutes($resource, $secure=true) {
      $Resource = ucfirst($resource);
      return [
          [
              "verb"    => "POST",
              "pattern" => "$resource",
              "name"    => "$resource.store",
              "target"  => "{$Resource}Controller@store",
              "secure"  => $secure 
          ],
          [
              "verb"    => "GET",
              "pattern" => "$resource",
              "name"    => "$resource.index",
              "target"  => "{$Resource}Controller@index",
              "secure"  => $secure 
          ],
          [
              "verb"    => "GET",
              "pattern" => "$resource/create",
              "name"    => "$resource.create",
              "target"  => "{$Resource}Controller@create",
              "secure"  => $secure 
          ],
          [
              "verb"    => "DELETE",
              "pattern" => "$resource/{{$resource}}",
              "name"    => "$resource.destroy",
              "target"  => "{$Resource}Controller@destroy",
              "secure"  => $secure 
          ],
          [
              "verb"    => "PATCH",
              "pattern" => "$resource/{{$resource}}",
              "name"    => "",
              "target"  => "{$Resource}Controller@update",
              "secure"  => $secure
          ],
          [
              "verb"    => "GET",
              "pattern" => "$resource/{{$resource}}",
              "name"    => "$resource.show",
              "target"  => "{$Resource}Controller@show",
              "secure"  => $secure 
          ],
          [
              "verb"    => "PUT",
              "pattern" => "$resource/{{$resource}}",
              "name"    => "$resource.update",
              "target"  => "{$Resource}Controller@update",
              "secure"  => $secure 
          ],
          [
              "verb"    => "GET",
              "pattern" => "$resource/{{$resource}}/edit",
              "name"    => "$resource.edit",
              "target"  => "{$Resource}Controller@edit",
              "secure"  => $secure 
          ]
        ];
    }
}
