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
        Schema::create('product', function (Blueprint $table) {
            $table->string('id',40)->primary();
            $table->string('name',255);
            $table->string('price',50);
            $table->text('description');
            $table->string('image',255);
            $table->unsignedInteger('quantity_stock');//số lượng tồn kho
            $table->string('product_category_id',40);
            $table->timestamps();

            // Khóa ngoại
            $table->foreign('product_category_id')->references('id')->on('product_category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
