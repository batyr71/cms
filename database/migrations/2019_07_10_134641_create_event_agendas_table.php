<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_agendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('session_id');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('title');
            $table->text('description');
            $table->json('speakers');
            $table->timestamps();
        });

        Schema::table('events', function (Blueprint $table) {
          $table->integer('days')->nullable()->after('start_date');
          // $table->dropColumn('end_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_agendas');
        
        Schema::table('events', function (Blueprint $table) {
          $table->dropColumn('days');
        });
    }
}
