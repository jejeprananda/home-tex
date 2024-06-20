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
        Schema::create('tb_user', function (Blueprint $table) {
            $table->id(); // Primary key, auto-increment
            $table->string('name')->nullable(false); // VARCHAR
            $table->string('password')->nullable(false); // VARCHAR
            $table->string('role')->nullable(false); // VARCHAR
            $table->string('address'); // VARCHAR
            $table->string('email')->nullable(false); // VARCHAR
            $table->string('phone_number'); // VARCHAR
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_user');
    }
};
