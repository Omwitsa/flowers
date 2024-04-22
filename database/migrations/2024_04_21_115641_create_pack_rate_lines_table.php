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
        Schema::create('pack_rate_lines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pack_rate_headers_id')->constrained();
            $table->string('variety', length: 100);
            $table->smallInteger('35');
            $table->smallInteger('40');
            $table->smallInteger('50');
            $table->smallInteger('60');
            $table->smallInteger('70');
            $table->smallInteger('80');
            $table->smallInteger('90');
            $table->smallInteger('100');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pack_rate_lines');
    }
};
