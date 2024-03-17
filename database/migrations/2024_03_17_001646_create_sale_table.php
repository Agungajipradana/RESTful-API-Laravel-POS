<?php

// Membuat migrasi untuk tabel 'sale'
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Membuat tabel 'sale' dengan kolom 'id_sale' sebagai primary key yang auto-increment
        // Kolom 'id_member' untuk menyimpan id member yang melakukan pembelian
        // Kolom 'total_item' untuk menyimpan total item yang dibeli dalam satu transaksi
        // Kolom 'total_price' untuk menyimpan total harga pembelian sebelum diskon
        // Kolom 'discount' untuk menyimpan nilai diskon yang diberikan pada pembelian
        // Kolom 'pay' untuk menyimpan total pembayaran yang dilakukan oleh customer
        // Kolom 'accepted' untuk menyimpan status penerimaan pembayaran (1 jika sudah diterima, 0 jika belum)
        // Kolom 'id_user' untuk menyimpan id user yang melakukan transaksi penjualan
        // Kolom 'timestamps' untuk menyimpan informasi waktu pembuatan dan pembaruan record
        Schema::create('sale', function (Blueprint $table) {
            $table->increments("id_sale");
            $table->integer("id_member");
            $table->integer("total_item");
            $table->integer("total_price");
            $table->tinyInteger("discount")->default(0);
            $table->integer("pay")->default(0);
            $table->integer("accepted")->default(0);
            $table->integer("id_user");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus tabel 'sale' jika migrasi di-rollback
        Schema::dropIfExists('sale');
    }
};
