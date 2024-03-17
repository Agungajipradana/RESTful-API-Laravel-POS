<?php

// Membuat migrasi untuk tabel 'category'
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Membuat tabel 'category' dengan kolom 'id_category' sebagai primary key yang auto-increment
        // Kolom 'category_name' untuk nama kategori yang unik
        // Kolom 'timestamps' untuk menyimpan informasi waktu pembuatan dan pembaruan record
        Schema::create('category', function (Blueprint $table) {
            $table->increments("id_category");
            $table->string("category_name")->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus tabel 'category' jika migrasi di-rollback
        Schema::dropIfExists('category');
    }
};
