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
        Schema::create('booking_transactions', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('phone_number');
            $table->string('email');
            $table->bigInteger('total_amount');
            $table->boolean('is_paid');
            $table->foreignId('destination_id')->constrained()->cascadeOnDelete(); // Assuming ticket_id is defined elsewhere
            $table->date('started_at');
            $table->string('proof');
            $table->string('booking_trx_id');
            $table->softDeletes(); // Assuming soft deletes are used

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_transactions');
    }
};
