<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoice_guest', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guest_id');
            $table->unsignedBigInteger('reservation_id');
            $table->float('invoice_amount');
            $table->timestamp('issued_at');
            $table->timestamp('paid_at');
            $table->timestamp('canceled_at');
            $table->timestamps();

            $table->foreign('guest_id')->references('id')->on('guest')->onDelete('cascade');
            $table->foreign('reservation_id')->references('id')->on('reservation')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_guest');
    }
};
