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
        Schema::create('diklats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_diklat')->nullable();
            $table->string('jumlahsasaran')->nullable();
            $table->string('periode')->nullable();
            $table->string('tempat')->nullable();
            $table->text('kata_pengantar')->nullable();
            $table->text('latar_belakang')->nullable();
            $table->text('tujuan')->nullable();
            $table->text('hasil_diharapkan')->nullable();
            $table->text('sasaran')->nullable();
            $table->text('materi_pokok')->nullable();
            $table->text('evaluasi')->nullable();
            $table->text('sertifikat')->nullable();
            $table->text('layanan_peserta')->nullable();
            $table->text('ttertib_pelaksanaan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diklats');
    }
};
