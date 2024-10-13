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
<<<<<<< HEAD
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });
=======
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
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD
=======
        // Hapus tabel 'admins' jika ada
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
        Schema::dropIfExists('admins');
    }
};
