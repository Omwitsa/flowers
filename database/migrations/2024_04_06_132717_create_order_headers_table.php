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
        Schema::create('order_headers', function (Blueprint $table) {
            $table->id();
            $table->integer('ClientId');
            $table->dateTime('DateCreated');
            $table->date('ReceivingDate');
            $table->string('LpoNo');
            $table->integer('Status');
            $table->string('Farm');
            $table->integer('Type');
            $table->integer('IsSendEmail');
            $table->mediumText('confirmUrl');
            $table->integer('DropOffId');
            $table->integer('IsTransferred');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_headers');
    }
};
