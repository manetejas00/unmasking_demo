<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('category')->nullable();
            $table->text('content');
            $table->string('image')->nullable();
            $table->date('published_at')->nullable();
            $table->string('author_name')->nullable()->after('category');
            $table->json('tags')->nullable()->after('author_name');
            $table->text('quote')->nullable()->after('extra_images');
            $table->string('quote_author')->nullable()->after('quote');
            $table->text('meta_description')->nullable()->after('published_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
