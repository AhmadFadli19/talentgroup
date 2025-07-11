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
        Schema::create('kolaborasidetail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kolaborasi_id')->constrained('kolaborasi')->onDelete('cascade');
            $table->string('judul_kelas');
            $table->text('deskripsi')->nullable();
            $table->integer('jumlah_materi')->nullable();;
            $table->text('materi')->nullable();;
            $table->text('persiapan')->nullable();;
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kolaborasidetail');
    }
};
