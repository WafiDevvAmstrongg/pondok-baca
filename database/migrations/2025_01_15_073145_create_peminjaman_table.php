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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
            $table->foreignId('id_buku')->constrained('bukus')->onDelete('cascade');
            $table->foreignId('id_staff')->constrained('users')->onDelete('cascade');
            $table->datetime('tgl_pinjam');
            $table->datetime('tgl_kembali');
            $table->datetime('tgl_dikembalikan')->nullable();
            $table->enum('status',['pending','approved','returned','overdue'])->default('pending');
            $table->decimal('jumlah_denda',10,2);
            $table->boolean('is_denda_dibayar')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
