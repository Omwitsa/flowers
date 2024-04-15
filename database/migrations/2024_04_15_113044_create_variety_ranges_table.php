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
        Schema::create('variety_ranges', function (Blueprint $table) {
            $table->id();
            $table->string('varietyName');
            $table->string('brand');
            $table->string('v_range');
            $table->string('picUrl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variety_ranges');
    }
};
