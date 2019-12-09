<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnPhoneToAttendees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atendees', function (Blueprint $table) {
          $table->string('phone')->nullable();
          $table->string('organization')->nullable();
          $table->string('position')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendees', function (Blueprint $table) {
          $table->dropColumn('phone');
          $table->dropColumn('organization');
          $table->dropColumn('position');

        });
    }
}
