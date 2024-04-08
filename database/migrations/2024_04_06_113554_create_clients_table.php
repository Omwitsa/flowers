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
            $table->string('ClientCode');
            $table->string('ClientType');
            $table->mediumText('EmailRecepients');
            $table->string('DropOff');
            $table->string('Category');
            $table->string('Country');
            $table->string('ClientDivision');
            $table->boolean('FairTrade')->default(false);
            $table->string('PackRate');
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
