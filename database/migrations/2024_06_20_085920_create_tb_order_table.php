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
        Schema::create('tb_order', function (Blueprint $table) {
            $table->id(); // Primary key, auto-increment
            $table->string('product_id')->nullable(false); // VARCHAR
            $table->string('user_email')->nullable(false); // VARCHAR
            $table->integer('price')->nullable(false); // VARCHAR
            $table->integer('discount'); // VARCHAR
            $table->integer('final_price')->nullable(false); // VARCHAR
            $table->string('status'); // VARCHAR
            $table->string('courier'); // VARCHAR
            $table->string('order_resi'); // VARCHAR
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_order');
    }
};
