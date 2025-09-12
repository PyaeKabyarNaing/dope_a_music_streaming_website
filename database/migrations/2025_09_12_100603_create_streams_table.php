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
        Schema::create('streams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('listener_id')
            ->constrained('users')
            ->onDelete('cascade');
            $table->foreignId('artist_id')
            ->constrained('users')
            ->onDelete('cascade');
            $table->foreignId('song_id')
            ->constrained('songs')
            ->onDelete('cascade');
            $table->timestamp('played_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('streams');
    }
};
