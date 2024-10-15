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
        Schema::create('inventaris', function (Blueprint $table) {
            $table->id();
            $table->string('kode_buat');
            $table->string('id_karyawan');
            $table->string('kode_barang')->unique();
            $table->text('deskripsi')->nullable();
            $table->string('lokasi');
            $table->enum('status', ['tersedia', 'dipinjam', 'rusak', 'hilang']);
            $table->timestamps();
            
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventaris');
    }
};
