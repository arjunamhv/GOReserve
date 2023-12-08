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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('field_id')->references('id')->on('fields');
            $table->date('booking_date');
            $table->time('start_time');
            $table->integer('duration');
            $table->time('end_time');
            $table->enum('status', ['Unpaid', 'Paid', 'Canceled', 'CheckIn', 'CheckOut'])->default('Unpaid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
