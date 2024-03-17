<?php

// Membuat migrasi untuk tabel 'purchase_detail'
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Membuat tabel 'purchase_detail' dengan kolom 'id_purchase_detail' sebagai primary key yang auto-increment
        // Kolom 'id_purchase' untuk menyimpan id pembelian yang terkait dengan detail pembelian
        // Kolom 'id_product' untuk menyimpan id produk yang dibeli
        // Kolom 'purchase_price' untuk menyimpan harga beli produk pada saat pembelian
        // Kolom 'total' untuk menyimpan jumlah produk yang dibeli
        // Kolom 'subtotal' untuk menyimpan subtotal (harga beli * jumlah) dari pembelian produk
        // Kolom 'timestamps' untuk menyimpan informasi waktu pembuatan dan pembaruan record
        Schema::create('purchase_detail', function (Blueprint $table) {
            $table->increments("id_purchase_detail");
            $table->integer("id_purchase");
            $table->integer("id_product");
            $table->integer("purchase_price");
            $table->integer("total");
            $table->integer("subtotal");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus tabel 'purchase_detail' jika migrasi di-rollback
        Schema::dropIfExists('purchase_detail');
    }
};
