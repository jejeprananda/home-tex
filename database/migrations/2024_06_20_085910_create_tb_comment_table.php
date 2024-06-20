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
        Schema::create('tb_comment', function (Blueprint $table) {
            $table->id(); // Primary key, auto-increment
            $table->longText('comment')->nullable(false); // VARCHAR
            $table->string('product_id')->nullable(false); // VARCHAR
            $table->string('created_by')->nullable(false); // VARCHAR
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_comment');
    }
};
