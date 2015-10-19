<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AudiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('audiences')->insert([
        'name' => 'Adults']);
      DB::table('audiences')->insert([
        'name' => 'Children']);
    }
}
