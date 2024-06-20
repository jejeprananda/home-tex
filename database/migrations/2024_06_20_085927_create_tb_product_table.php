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
        Schema::create('tb_product', function (Blueprint $table) {
            $table->id(); // Primary key, auto-increment
            $table->string('name')->nullable(false); // VARCHAR
            $table->string('category')->nullable(false); // VARCHAR
            $table->integer('price')->nullable(false); // VARCHAR
            $table->integer('discount'); // VARCHAR
            $table->integer('stock')->nullable(false); // VARCHAR
            $table->string('img')->nullable(false); // VARCHAR
            $table->string('description')->nullable(false); // VARCHAR
            $table->integer('rating')->nullable(false); // VARCHAR
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_product');
    }
};
