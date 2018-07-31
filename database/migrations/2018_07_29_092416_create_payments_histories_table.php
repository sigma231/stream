<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->float('payment_amount');
            $table->integer('promotion_id');
            $table->float('balance');
            $table->integer('plan_id');
            $table->integer('completion_status');
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
        Schema::dropIfExists('payments_histories');
    }
}
