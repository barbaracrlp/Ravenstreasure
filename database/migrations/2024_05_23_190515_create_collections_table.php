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
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained('designers')->onDelete('cascade');
            // $table->foreign('designer_id')->constrained('designers')->onDelete('cascade');
            // $table->foreign('designer_user_id')->constrained('designers')->onDelete('cascade');

            $table->foreignId('brand_id')->nullable()->constrained('brands')->onDelete('cascade');
            $table->timestamps();
            $table->string('name');
            $table->string('description');
            $table->decimal('price',8,2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collections');
    }
};
