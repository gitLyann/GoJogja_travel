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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug');
            $table->string('thumbnail');
            $table->string('path_video');
            $table->text('about');
            $table->string('address');
            $table->unsignedBigInteger('price');
            $table->boolean('is_popullar');
            $table->time('open_time_at');
            $table->time('closed_time_at');
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();// Assuming category_id is defined elsewhere
            $table->foreignId('admin_id')->constrained()->cascadeOnDelete();// Assuming admin_id is defined elsewhere
            $table->softDeletes();// Assuming soft deletes are used

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};
