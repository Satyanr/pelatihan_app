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
        Schema::create('surat_pemanggilans', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat')->nullable();
            $table->string('lampiran')->nullable();
            $table->string('hal')->nullable();
            $table->string('tanggal')->nullable();
            $table->text('salampembuka')->nullable();
            $table->string('pembukaan')->nullable();
            $table->string('penutupan')->nullable();
            $table->string('checkout')->nullable();
            $table->text('kehadiranpeserta')->nullable();
            $table->text('kelengkapan')->nullable();
            $table->text('pembiayaan')->nullable();
            $table->text('salampenutup')->nullable();
            $table->string('tembusan')->nullable();
            $table->string('nama_kepala')->nullable();
            $table->string('nip')->nullable();
            $table->string('checkdanreg')->nullable();
            $table->string('kelas')->nullable();
            $table->text('persyaratan')->nullable();
            $table->string('tempatpelatihan')->nullable();
            $table->string('periode')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_pemanggilans');
    }
};
