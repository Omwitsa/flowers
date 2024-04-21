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
        Schema::create('orderline', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('OrderHeaderId');
            $table->bigInteger('VarietyId');
            $table->bigInteger('VarietyRangeId');
            $table->string('Length', length: 20);
            $table->string('BoxType', length: 20);
            $table->string('StemQty', length: 20);
            $table->string('PackRate', length: 20);
            $table->string('Boxes', length: 20);
            $table->string('Farm', length: 100);
            $table->bigInteger('FarmMixBoxId');
            $table->string('BoxMarking');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderline');
    }
};
