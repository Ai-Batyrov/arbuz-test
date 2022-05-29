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
        Schema::create('melons', function (Blueprint $table) {
            $table->id();
            $table->integer('row');
            $table->integer('place_in_garden');
            $table->enum('status', ['unripe','ripe','picked'])->default('ripe');
            $table->float('weight');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('melons');
    }
};
