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
        Schema::create('OrderFood', function (Blueprint $table) {
            $table->id();
            $table->string('No');
            $table->string('FoodNameOrder')->nullable();
            $table->string('FoodCost')->nullable();
            $table->string('TableNo')->nullable();
            $table->string('Remark')->nullable();
            $table->string('KitchenRoom_responsibility')->nullable();
            $table->timestamp('TimeToKitchenRoom')->nullable();
            $table->timestamp('TimeDoneFromKitchenRoom')->nullable();
            $table->Int('Status')->nullable();
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
        Schema::dropIfExists('OrderFood');
    }
};
