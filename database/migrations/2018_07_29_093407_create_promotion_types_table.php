<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
<<<<<<< HEAD
     */ 
=======
     */
>>>>>>> fdf66f79f7e3af9ee0ee89a7ca56a8bef9ec0492
    public function up()
    {
        Schema::create('promotion_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('promotion_name');
            $table->string('promotion_duration');
            $table->string('promotion_discount_percentage');
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
        Schema::dropIfExists('promotion_types');
    }
}
