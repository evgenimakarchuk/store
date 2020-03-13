<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('country');
            $table->string('name')->nullable();
            $table->string('last_name');
            $table->string('company_name')->nullable();
            $table->string('address_street');
            $table->string('address_apartment');
            $table->string('city');
            $table->string('county')->nullable();
            $table->string('postcode');
            $table->string('email');
            $table->string('phone');
            $table->integer('user_id');
            $table->string('status');
            $table->text('basket');
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
        Schema::dropIfExists('orders');
    }
}
