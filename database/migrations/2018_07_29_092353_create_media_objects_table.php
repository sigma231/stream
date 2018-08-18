<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_objects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('media_name');
            $table->integer('media_image_id');
            $table->string('media_short-name');
            $table->integer('number_of_episodes');
            $table->integer('rating');
            $table->integer('user_uploader_id');
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
        Schema::dropIfExists('media_objects');
    }
}
