<?php

// Membuat migrasi untuk tabel 'supplier'
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Membuat tabel 'supplier' dengan kolom 'id_supplier' sebagai primary key yang auto-increment
        // Kolom 'name' untuk nama supplier
        // Kolom 'address' untuk alamat supplier (nullable karena bisa kosong)
        // Kolom 'phone' untuk nomor telepon supplier
        // Kolom 'timestamps' untuk menyimpan informasi waktu pembuatan dan pembaruan record
        Schema::create('supplier', function (Blueprint $table) {
            $table->increments("id_supplier");
            $table->string("name");
            $table->text("address")->nullable();
            $table->string("phone");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus tabel 'supplier' jika migrasi di-rollback
        Schema::dropIfExists('supplier');
    }
};
