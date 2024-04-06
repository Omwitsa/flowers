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
        Schema::create('varieties', function (Blueprint $table) {
            $table->id();
            $table->mediumText('VarietyName');
            $table->string('VarietyCode');
            $table->mediumText('FlowerType');
            $table->string('Range');
            $table->string('Colour');
            $table->boolean('Active');
            $table->mediumText('PicUrl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('varieties');
    }
};
