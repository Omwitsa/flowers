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
        Schema::create('variety', function (Blueprint $table) {
            $table->id();
            $table->string('VarietyName', length: 100)->unique(); 
            $table->string('VarietyCode', length: 50)->unique();
            $table->string('FlowerType', length: 50);
            $table->string('Colour', length: 50);
            $table->boolean('Active')->default(true);
            $table->string('brand', length: 100);
            $table->bigInteger('VarietyRangeId');
            $table->string('picUrl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variety');
    }
};
