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
            $table->string('VarietyName');
            $table->string('VarietyCode');
            $table->string('FlowerType');
            $table->string('Range');
            $table->string('Colour');
            $table->boolean('Active')->default(true);
            $table->string('PicUrl');
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
