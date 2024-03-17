<?php

// Membuat migrasi untuk tabel 'member'
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Membuat tabel 'member' dengan kolom 'id_member' sebagai primary key yang auto-increment
        // Kolom 'code_member' untuk kode member yang unik
        // Kolom 'name' untuk nama member
        // Kolom 'address' untuk alamat member (nullable karena bisa kosong)
        // Kolom 'phone' untuk nomor telepon member
        // Kolom 'timestamps' untuk menyimpan informasi waktu pembuatan dan pembaruan record
        Schema::create('member', function (Blueprint $table) {
            $table->increments("id_member");
            $table->string("code_member")->unique();
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
        // Menghapus tabel 'member' jika migrasi di-rollback
        Schema::dropIfExists('member');
    }
};
