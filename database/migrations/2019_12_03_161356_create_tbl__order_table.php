<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_Order', function (Blueprint $table) {
          $table->increments('order_id');
          $table->integer('customer_id');
          $table->integer('Shipping_id');
          $table->integer('payment_id');
          $table->string('order_total');
          $table->integer('order_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_Order');
    }
}
