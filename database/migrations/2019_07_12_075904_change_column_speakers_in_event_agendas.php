<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnSpeakersInEventAgendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_agendas', function (Blueprint $table) {
          $table->string('title')->nullable()->change();
          $table->text('description')->nullable()->change();
          $table->json('speakers')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sessions', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('event_id');
          $table->string('title');
          $table->integer('day');
          $table->text('hosts')->nullable();
          $table->integer('order')->nullable();
          $table->timestamps();
        });
    }
}
