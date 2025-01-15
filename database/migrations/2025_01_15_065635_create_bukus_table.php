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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('penulis');
            $table->string('isbn')->nullable();
            $table->enum('kategori',['fiksi','non-fiksi','sains','tekhnologi','sejarah','sastra','komik','lainya']);
            $table->text('deskripsi')->nullable();
            $table->string('cover_img')->nullable();
            $table->integer('stock');
            $table->decimal('denda_harian',10,2);
            $table->string('penerbit');
            $table->year('tahun_terbit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
