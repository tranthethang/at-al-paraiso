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
        Schema::create('reservation_status_events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reservation_id');
            $table->unsignedBigInteger('reservation_status_catalog_id');
            $table->text('details')->nullable();
            $table->timestamps();

            $table->foreign('reservation_status_catalog_id')->references('id')->on('reservation_status_catalog')->onDelete('cascade');
            $table->foreign('reservation_id')->references('id')->on('reservation')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_status_events');
    }
};
