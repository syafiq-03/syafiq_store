<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Cek apakah tabel 'admins' sudah ada
        if (!Schema::hasTable('admins')) {
            Schema::create('admins', function (Blueprint $table) {
                $table->id(); // Kolom 'id' sebagai primary key dengan tipe 'bigint' auto-increment
                $table->string('name'); // Kolom 'name' dengan tipe 'string' (varchar)
                $table->string('username'); // Kolom 'username' dengan tipe 'string' (varchar)
                $table->string('email')->unique(); // Kolom 'email' dengan tipe 'string' dan harus unik
                $table->string('password'); // Kolom 'password' dengan tipe 'string'
                $table->timestamps(); // Kolom 'created_at' dan 'updated_at' secara otomatis ditambahkan oleh Laravel
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Hapus tabel 'admins' jika ada
        Schema::dropIfExists('admins');
    }
};
