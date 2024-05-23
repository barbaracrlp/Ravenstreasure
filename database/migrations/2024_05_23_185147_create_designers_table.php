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
        Schema::create('designers', function (Blueprint $table) {
            $table->foreignId('user_id')->primary(); // Define 'user_id' as the primary key
            $table->string('nameBrand')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Define the foreign key constraint
            $table->foreignId('payment_id')->nullable()->constrained('payments')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designers');
    }
};
