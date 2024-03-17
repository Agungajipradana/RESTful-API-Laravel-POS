<?php

// Membuat migrasi untuk menambahkan kolom 'photo' dan 'level' pada tabel 'users'
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Menambahkan kolom 'photo' untuk menyimpan foto profil pengguna (nullable)
        // Menambahkan kolom 'level' untuk menentukan level akses pengguna (default: 0)
        Schema::table('users', function (Blueprint $table) {
            $table->string("photo")->nullable()->after("password");
            $table->tinyInteger("level")->default(0)->after("photo");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus kolom 'photo' dan 'level' dari tabel 'users' jika migrasi di-rollback
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                "photo",
                "level"
            ]);
        });
    }
};
