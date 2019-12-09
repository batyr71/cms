<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnOrdertoAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('event_agendas', function (Blueprint $table) {
        $table->integer('order')->nullable()->after('session_id');
        $table->dropColumn('speakers');
        $table->dropColumn('title');
        $table->dropColumn('description');
        $table->integer('duration')->nullable()->after('order')->change();
        $table->string('co_speakers')->nullable()->after('description');
        $table->string('speaker')->nullable()->after('description');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
