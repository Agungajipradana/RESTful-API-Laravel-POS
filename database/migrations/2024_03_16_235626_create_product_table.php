<?php

// Membuat migrasi untuk tabel 'product'
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Membuat tabel 'product' dengan kolom 'id_product' sebagai primary key yang auto-increment
        // Kolom 'id_category' untuk menyimpan id kategori produk
        // Kolom 'product_name' untuk nama produk
        // Kolom 'brand' untuk merek produk
        // Kolom 'purchase_price' untuk harga beli produk
        // Kolom 'stock' untuk stok produk
        // Kolom 'timestamps' untuk menyimpan informasi waktu pembuatan dan pembaruan record
        Schema::create('product', function (Blueprint $table) {
            $table->increments("id_product");
            $table->integer("id_category");
            $table->string("product_name");
            $table->string("brand");
            $table->integer("purchase_price");
            $table->integer("stock");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus tabel 'product' jika migrasi di-rollback
        Schema::dropIfExists('product');
    }
};
