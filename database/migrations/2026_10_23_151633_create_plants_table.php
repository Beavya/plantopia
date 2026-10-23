<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->string('care_light');
            $table->string('care_water');
            $table->string('care_humidity');
            $table->string('care_fertilizer');
            $table->boolean('pet_safe')->default(false);
            $table->boolean('child_safe')->default(false);
            $table->tinyInteger('care_level');
            $table->tinyInteger('light_level');
            $table->tinyInteger('size');
            $table->tinyInteger('water_level');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('plants');
    }
};
