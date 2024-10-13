<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;

    protected $fillable = [
<<<<<<< HEAD
        'nama_distributor', 'lokasi', 'kontak', 'email', 'password'
=======
        'name', 'username', 'email', 'password'
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
    ];
}
