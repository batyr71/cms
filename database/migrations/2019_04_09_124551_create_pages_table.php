<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
/*         Schema::create('pages', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('parent_id')->default(null);
          $table->string('title');
          $table->string('slug');
          $table->string('path');
          $table->longText('content');
          $table->integer('order')->nullable();
          $table->boolean('is_active')->default(true);
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
/*         Schema::dropIfExists('pages'); */
    }
}
