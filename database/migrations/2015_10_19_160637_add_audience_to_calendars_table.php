<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAudienceToCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('calendars', function (Blueprint $table) {
        $table->unsignedInteger('audience');
        $table->foreign('audience')
          ->references('id')
          ->on('audiences');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('calendars', function (Blueprint $table) {
        $table->dropColumn('audience');
      });
    }
}
