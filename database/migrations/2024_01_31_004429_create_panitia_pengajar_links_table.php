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
        Schema::create('panitia_pengajar_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('diklat_id')->constrained('diklats')->onDelete('cascade');
            $table->foreignId('panitia_pengajar_id')->constrained('panitia_pengajars')->onDelete('cascade');
            $table->enum('jenis', ['panitia', 'pengajar'])->default('panitia');
            $table->string('mata_diklat');
            $table->string('jam_pelajaran');
            $table->enum('status', ['Pending', 'Di Setujui', 'Di Tolak'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panitia_pengajar_links');
    }
};
