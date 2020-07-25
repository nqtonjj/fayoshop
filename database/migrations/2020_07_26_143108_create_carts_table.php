<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('orders_id')->unsigned()->nullable();
            $table->foreign('orders_id')->references('id')->on('orders')->onDelete('cascade');
            $table->boolean('status_transport')->default(false);
            $table->boolean('status_pay')->default(false);
            $table->timestamps();
        });
    }

    // đờ mờ lại bị gọi =.= =.=

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
