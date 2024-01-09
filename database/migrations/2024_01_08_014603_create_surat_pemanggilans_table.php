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
            $table->string('program_diklat')->nullable();
            $table->string('diklat')->nullable();
            $table->string('kelas')->nullable();
            $table->text('persyaratan')->nullable();
            $table->string('tempat')->nullable();
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
