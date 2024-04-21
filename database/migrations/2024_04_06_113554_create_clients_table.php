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
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string('ClientName');
            $table->string('ClientCode', length: 50);
            $table->string('ClientType', length: 50);
            $table->mediumText('EmailRecepients');
            $table->string('DropOff');
            $table->string('Category', length: 50);  // Inactive ... 
            $table->string('Country', length: 50);
            $table->string('ClientDivision', length: 100);
            $table->boolean('FairTrade')->default(false);
            $table->string('Price', length: 100);
            $table->string('PackRate', length: 100);
            $table->string('Currency', length: 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
};
