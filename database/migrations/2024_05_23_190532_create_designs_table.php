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
        Schema::create('designs', function (Blueprint $table) {
            $table->id();
            // Define the column that references 'user_id' in 'designers'
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Define the foreign key constraint
            $table->string('name')->unique();
            $table->foreignId('collection_id')->nullable()->constrained('collections')->onDelete('set null');
            $table->integer('stock');
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('set null');
            $table->foreignId('type_id')->nullable()->constrained('types')->onDelete('set null');
            $table->timestamps();
            $table->date('expiration')->nullable();
            $table->decimal('price', 8, 2);
            $table->string('file_path')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designs');
    }
};
