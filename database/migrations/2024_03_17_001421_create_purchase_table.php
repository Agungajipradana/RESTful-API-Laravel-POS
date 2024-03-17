<?php

// Membuat migrasi untuk tabel 'purchase'
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Membuat tabel 'purchase' dengan kolom 'id_purchase' sebagai primary key yang auto-increment
        // Kolom 'id_supplier' untuk menyimpan id supplier yang terkait dengan pembelian
        // Kolom 'total_item' untuk menyimpan total barang yang dibeli
        // Kolom 'total_price' untuk menyimpan total harga pembelian
        // Kolom 'discount' untuk menyimpan nilai diskon yang diberikan (default 0 jika tidak ada diskon)
        // Kolom 'pay' untuk menyimpan jumlah yang dibayarkan (default 0 jika belum dibayar)
        // Kolom 'timestamps' untuk menyimpan informasi waktu pembuatan dan pembaruan record
        Schema::create('purchase', function (Blueprint $table) {
            $table->increments("id_purchase");
            $table->integer("id_supplier");
            $table->integer("total_item");
            $table->integer("total_price");
            $table->tinyInteger("discount")->default(0);
            $table->integer("pay")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus tabel 'purchase' jika migrasi di-rollback
        Schema::dropIfExists('purchase');
    }
};
