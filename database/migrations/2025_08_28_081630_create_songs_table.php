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
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('artist_name');
            $table->string('ft_artist_name')->nullable();
            $table->date('release_date')->nullable();
            $table->time('duration')->nullable();
            $table->timestamps();
            $table->foreignId('album_id')->nullable()
            ->constrained('albums')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
