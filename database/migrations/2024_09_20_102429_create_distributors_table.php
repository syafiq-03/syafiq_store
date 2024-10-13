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
        Schema::create('distributors', function (Blueprint $table) {
            $table->id();
            $table->string('nama_distributor');
            $table->string('lokasi');
            $table->string('kontak');
            $table->string('email');
            $table->timestamps();
        });
=======
        // Cek apakah tabel 'distributors' sudah ada
        if (!Schema::hasTable('distributors')) {
            Schema::create('distributors', function (Blueprint $table) {
                $table->id();
                $table->string('nama_distributor');
                $table->string('lokasi');
                $table->string('kontak');
                $table->string('email');
                $table->timestamps();
            });
        }
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distributors');
    }
};
