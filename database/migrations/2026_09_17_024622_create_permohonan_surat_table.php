<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('permohonan_surat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('layanan_id')->constrained('layanan_surat')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('nama_pemohon', 100);
            $table->string('nik', 20)->nullable();
            $table->text('alamat')->nullable();
            $table->text('keperluan')->nullable();
            $table->string('file_persyaratan', 255)->nullable();
            $table->enum('status', [ 'menunggu', 'diproses', 'selesai', 'ditolak',])->default('menunggu');
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('permohonan_surat');
    }
};
