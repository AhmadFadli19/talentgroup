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
        Schema::create('slideblogger', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('blog_author')->nullable();
            $table->string('description')->nullable();
            $table->string('image');
            $table->string('create_view')->unique();
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slideblogger');
    }
};
