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
        Schema::create('synchronization', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reservation_id');
            $table->unsignedBigInteger('channel_id');
            $table->text('message_sent');
            $table->text('message_received');
            $table->timestamps();

            $table->foreign('reservation_id')->references('id')->on('reservation')->onDelete('cascade');
            $table->foreign('channel_id')->references('id')->on('channel')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('synchronization');
    }
};
