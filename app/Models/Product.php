<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'price', 'category', 'description', 'image'
    ];
<<<<<<< HEAD
    public function flashSales()
    {
        return $this->belongsToMany(FlashSale::class, 'flash_sale_product')
                    ->withPivot('discount_price')
                    ->withTimestamps();
    }
=======
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
}