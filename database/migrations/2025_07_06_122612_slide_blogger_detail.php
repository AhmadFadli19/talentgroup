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
        Schema::create('slidebloggerdetail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('slideBlogger_id')->constrained('slideBlogger')->onDelete('cascade');
            $table->string('judul_kelas');
            $table->text('deskripsi');
            $table->integer('jumlah_materi');
            $table->text('materi');
            $table->text('persiapan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slidebloggerdetail');
    }
};
