<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('customers_counts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // e.g., Happy Clients, Employees, Useful Programs
            $table->bigInteger('count'); // e.g., 1538, 575000, 690
            $table->string('suffix')->nullable(); // e.g., "+", "K+", "M"
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers_counts');
    }
};

