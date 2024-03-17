<?php

// Membuat migrasi untuk tabel 'setting'
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Membuat tabel 'setting' dengan kolom 'id_setting' sebagai primary key yang auto-increment
        // Kolom 'company_name' untuk menyimpan nama perusahaan
        // Kolom 'address' untuk menyimpan alamat perusahaan (opsional)
        // Kolom 'phone' untuk menyimpan nomor telepon perusahaan
        // Kolom 'nota_type' untuk menyimpan jenis nota yang digunakan (misal: 1 = A4, 2 = Kwitansi)
        // Kolom 'path_logo' untuk menyimpan path/logo perusahaan
        // Kolom 'path_card_member' untuk menyimpan path/logo kartu member (jika ada)
        // Kolom 'timestamps' untuk menyimpan informasi waktu pembuatan dan pembaruan record
        Schema::create('setting', function (Blueprint $table) {
            $table->increments("id_setting");
            $table->string("company_name");
            $table->text("address")->nullable();
            $table->string("phone");
            $table->tinyInteger("nota_type");
            $table->string("path_logo");
            $table->string("path_card_member");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus tabel 'setting' jika migrasi di-rollback
        Schema::dropIfExists('setting');
    }
};
