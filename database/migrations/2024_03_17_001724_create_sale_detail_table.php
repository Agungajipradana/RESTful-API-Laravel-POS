<?php

// Membuat migrasi untuk tabel 'sale_detail'
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Membuat tabel 'sale_detail' dengan kolom 'id_sale_detail' sebagai primary key yang auto-increment
        // Kolom 'id_sale' untuk menyimpan id transaksi penjualan yang terkait
        // Kolom 'id_product' untuk menyimpan id produk yang terjual
        // Kolom 'selling_price' untuk menyimpan harga jual satu unit produk
        // Kolom 'total' untuk menyimpan jumlah produk yang terjual dalam satu transaksi
        // Kolom 'discount' untuk menyimpan nilai diskon yang diberikan pada produk
        // Kolom 'subtotal' untuk menyimpan total harga produk setelah diskon
        // Kolom 'timestamps' untuk menyimpan informasi waktu pembuatan dan pembaruan record
        Schema::create('sale_detail', function (Blueprint $table) {
            $table->increments("id_sale_detail");
            $table->integer("id_sale");
            $table->integer("id_product");
            $table->integer("selling_price");
            $table->integer("total");
            $table->tinyInteger("discount")->default(0);
            $table->integer("subtotal");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus tabel 'sale_detail' jika migrasi di-rollback
        Schema::dropIfExists('sale_detail');
    }
};
