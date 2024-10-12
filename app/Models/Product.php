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
    public function flashSales()
    {
        return $this->belongsToMany(FlashSale::class, 'flash_sale_product')
                    ->withPivot('discount_price')
                    ->withTimestamps();
    }
}