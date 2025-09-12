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
        Schema::create('subscription_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->constrained('users')
            ->onDelete('cascade');
            $table->foreignId('old_plan_id')
            ->constrained('plans')
            ->onDelete('cascade');
            $table->foreignId('new_plan_id')
            ->constrained('plans')
            ->onDelete('cascade');
            $table->foreignId('payment_id')
            ->constrained('payments')
            ->onDelete('cascade');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_histories');
    }
};
