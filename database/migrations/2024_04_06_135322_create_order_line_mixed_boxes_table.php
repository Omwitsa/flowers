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
        Schema::create('orderlinemixedbox', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('OrderLineId');
            $table->bigInteger('VarietyId');
            $table->string('StemLength');
            $table->string('StemQty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderlinemixedbox');
    }
};
