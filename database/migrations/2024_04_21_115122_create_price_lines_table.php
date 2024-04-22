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
        Schema::create('price_lines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('price_headers_id')->constrained();
            $table->string('variety', length: 100);
            $table->decimal('35', total: 8, places: 2);
            $table->decimal('40', total: 8, places: 2);
            $table->decimal('50', total: 8, places: 2);
            $table->decimal('60', total: 8, places: 2);
            $table->decimal('70', total: 8, places: 2);
            $table->decimal('80', total: 8, places: 2);
            $table->decimal('90', total: 8, places: 2);
            $table->decimal('100', total: 8, places: 2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_lines');
    }
};
