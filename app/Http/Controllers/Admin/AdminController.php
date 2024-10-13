<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Distributor;
<<<<<<< HEAD
use App\Models\FlashSale;
=======
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
class AdminController extends Controller
{
    public function dashboard()
    {
<<<<<<< HEAD
        $users = User::count();
        $products = Product::count();
        $distributors = Distributor::count();
        $flash_sales = FlashSale::count();
    
        return view('pages.admin.index', compact('users', 'products', 'distributors', 'flash_sales'));
    }
    
=======
        $products = Product::count();
        $users = User::count();
        $distributors = Distributor::count();

        return view('pages.admin.index', compact('products', 'users', 'distributors'));
    }
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
}
