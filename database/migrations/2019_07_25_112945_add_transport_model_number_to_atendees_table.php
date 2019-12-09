<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTransportModelNumberToAtendeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atendees', function (Blueprint $table) {
          $table->renameColumn('files', 'file');
          $table->string('transport_number')->nullable()->after('position');
          $table->string('transport_model')->nullable()->after('position');
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
            
        });
    }
}
