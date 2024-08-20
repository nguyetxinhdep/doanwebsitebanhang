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
        Schema::create('shopping_order', function (Blueprint $table) {
            $table->string('id',40)->primary();
            $table->date('date_order');
            $table->string('total_price', 50);
            $table->string('status_order', 50);
            $table->string('address_shipping', 255);
            $table->string('user_id',40);
            $table->string('payment_method_id',40);
            $table->string('status_payment',25);
            $table->timestamps();

            // Khóa ngoại
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('payment_method_id')->references('id')->on('payment_method')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping_order');
    }
};
