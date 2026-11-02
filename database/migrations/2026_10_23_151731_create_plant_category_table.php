<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('plant_category', function (Blueprint $table) {
            $table->id('plant_category_id');
            $table->foreignId('category_id')->constrained('categories', 'category_id')->onDelete('cascade');
            $table->foreignId('plant_id')->constrained('plants', 'plant_id')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('plant_category');
    }
};
