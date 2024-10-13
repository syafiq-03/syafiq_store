<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Admin;
use App\Models\Distributor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'user1',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456789'),
            'point' => 10000, 
        ]);

        Admin::create([
            'name' => 'admin', 
            'username' => 'Admin', 
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789'),
        ]);

        Distributor::create([
<<<<<<< HEAD
            'nama_distributor' => 'Syafiq', 
            'lokasi' => 'Bengkalis', 
            'kontak' => '082170618686',
            'email' => 'syafiq@gmail.com',
=======
            'nama_distributor' => 'syafiq', 
            'lokasi' => 'kembung luar', 
            'kontak' => '082170618686',
            'email' => 'distributor@gmail.com',
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
        ]);
    }
}