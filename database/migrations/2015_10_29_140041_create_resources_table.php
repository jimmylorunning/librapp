<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('pattern');
            $table->string('target');
            $table->boolean('secure');
            $table->timestamps();
        });

        Schema::create('resource_role', function (Blueprint $table) {
          $table->integer('resource_id')->unsigned()->index();
          $table->foreign('resource_id')
            ->references('id')
            ->on('resources')
            ->onDelete('cascade');
          $table->integer('role_id')->unsigned()->index();
          $table->foreign('role_id')
            ->references('id')
            ->on('roles')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resources');
        Schema::dropIfExists('resource_role');
    }
}
