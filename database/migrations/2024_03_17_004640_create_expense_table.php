<?php

// Membuat migrasi untuk tabel 'expense'
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Membuat tabel 'expense' dengan kolom 'id_expense' sebagai primary key yang auto-increment
        // Kolom 'description' untuk menyimpan deskripsi atau keterangan dari pengeluaran
        // Kolom 'nominal' untuk menyimpan nilai nominal pengeluaran
        // Kolom 'timestamps' untuk menyimpan informasi waktu pembuatan dan pembaruan record
        Schema::create('expense', function (Blueprint $table) {
            $table->increments("id_expense");
            $table->text("description");
            $table->integer("nominal");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus tabel 'expense' jika migrasi di-rollback
        Schema::dropIfExists('expense');
    }
};
