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
        Schema::create('destination_photos', function (Blueprint $table) {
            $table->id();

            $table->string('photo');
            $table->foreignId('destination_id')->constrained()->cascadeOnDelete(); // Assuming destination_id is defined elsewhere
            $table->softDeletes(); // Assuming soft deletes are used

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destination_photos');
    }
};
