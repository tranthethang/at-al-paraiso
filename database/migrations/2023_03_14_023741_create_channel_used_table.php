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
        Schema::create('channel_used', function (Blueprint $table) {
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('channel_id');

            //FOREIGN KEY CONSTRAINTS
            $table->foreign('room_id')->references('id')->on('room')->onDelete('cascade');
            $table->foreign('channel_id')->references('id')->on('channel')->onDelete('cascade');

            //SETTING THE PRIMARY KEYS
            $table->primary(['room_id','channel_id']);

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
        Schema::dropIfExists('channel_used');
    }
};
