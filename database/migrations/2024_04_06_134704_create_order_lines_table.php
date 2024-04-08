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
            $table->string('Length');
            $table->string('BoxType');
            $table->string('StemQty');
            $table->string('PackRate');
            $table->string('Boxes');
            $table->string('Farm');
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
