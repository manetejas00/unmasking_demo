<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->text('page_content')->nullable()->after('designation'); // New column for page content
            $table->string('client')->nullable()->after('page_content'); // Client name
            $table->string('category')->nullable()->after('client'); // Category
            $table->date('date')->nullable()->after('category'); // Project date
            $table->string('address')->nullable()->after('date'); // Address
        });
    }

    public function down(): void {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->dropColumn(['page_content', 'client', 'category', 'date', 'address']);
        });
    }
};
