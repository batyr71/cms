<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeAttendeeFieldsNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atendees', function (Blueprint $table) {
          $table->string('is_speaker')->nullable()->change();
          $table->string('subject')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('atendees', function (Blueprint $table) {
          $table->string('is_speaker')->nullable()->change();
          $table->string('subject')->nullable()->change();
        });
    }
}
