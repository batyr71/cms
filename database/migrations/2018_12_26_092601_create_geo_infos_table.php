<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeoInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
/*         Schema::create('geo_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->longText('body')->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamps();
        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
/*         Schema::dropIfExists('geo_infos');
 */    }
}
