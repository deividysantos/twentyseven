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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->decimal('value', 10,2);
            $table->date('date');
            $table->unsignedBigInteger('id_account')->nullable();
            $table->unsignedBigInteger('id_creditCard')->nullable();
            $table->unsignedBigInteger('id_category');

            $table->foreign('id_account')->references('id')->on('accounts');
            $table->foreign('id_creditCard')->references('id')->on('credit_cards');
            $table->foreign('id_category')->references('id')->on('categories');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
