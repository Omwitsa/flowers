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
            $table->mediumText('ClientName');
            $table->string('ClientCode');
            $table->mediumText('ClientType');
            $table->mediumText('EmailRecepients');
            $table->mediumText('DropOff');
            $table->mediumText('Category');
            $table->mediumText('Country');
            $table->mediumText('ClientDivision');
            $table->boolean('FairTrade');
            $table->mediumText('PackRate');
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
