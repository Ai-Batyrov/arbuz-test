<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id')->unsigned();
//            $table->string('customer_firstname')->default("");
//            $table->string('customer_lastname')->default("");
            $table->string('address',50)->default("");
            $table->string('phone_number',15)->default("");
            $table->integer('quantity',)->default(0);
            $table->dateTimeTz('delivery_time');
            $table->enum('is_cut_into_slices',['Yes','No'])->default('No');
            $table->timestamps();
        });
//
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customers')
                ->onUpdate('cascade')->onDelete('cascade');
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
};
