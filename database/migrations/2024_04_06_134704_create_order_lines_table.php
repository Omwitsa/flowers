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
        Schema::create('order_lines', function (Blueprint $table) {
            $table->id();
            $table->integer('OrderHeaderId');
            $table->integer('VarietyId');
            $table->integer('VarietyRangeId');
            $table->string('Length');
            $table->string('BoxType');
            $table->string('StemQty');
            $table->string('PackRate');
            $table->string('Boxes');
            $table->string('Farm');
            $table->integer('FarmMixBoxId');
            $table->mediumText('BoxMarking');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_lines');
    }
};
