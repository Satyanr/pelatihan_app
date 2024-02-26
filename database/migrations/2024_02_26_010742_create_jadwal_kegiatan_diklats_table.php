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
        Schema::create('jadwal_kegiatan_diklats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jadwal_diklat_id')->constrained('jadwal_diklats')->onDelete('cascade');
            $table->date('tanggal')->nullable();
            $table->string('waktu')->nullable();
            $table->string('materi_topik_sajian')->nullable();
            $table->string('narasumber_penyaji')->nullable();
            $table->string('penanggung_jawab')->nullable();
            $table->enum('checkin', ['yes', 'no'])->nullable();
            $table->enum('checkout', ['yes', 'no'])->nullable();
            $table->enum('break', ['yes', 'no'])->nullable();
            $table->enum('isoma', ['yes', 'no'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_kegiatan_diklats');
    }
};
