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
        Schema::create('bannercarddetail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('BannerCard_id')->constrained('BannerCardCreate')->onDelete('cascade');
            $table->string('judul_kelas');
            $table->text('deskripsi')->nullable();
            $table->integer('jumlah_materi')->nullable();;
            $table->text('materi')->nullable();;
            $table->text('persiapan')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bannercarddetail');
    }
};
