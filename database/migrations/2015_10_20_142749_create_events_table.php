<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->timestamp('starts');
            $table->timestamp('ends');
            $table->timestamps();
        });

        Schema::create('calendar_event', function (Blueprint $table) {
          $table->integer('calendar_id')->unsigned()->index();
          $table->foreign('calendar_id')
            ->references('id')
            ->on('calendars')
            ->onDelete('cascade');

          $table->integer('event_id')->unsigned()->index();
          $table->foreign('event_id')
            ->references('id')
            ->on('events')
            ->onDelete('cascade');

          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('calendar_event');
        Schema::drop('events');
    }
}
