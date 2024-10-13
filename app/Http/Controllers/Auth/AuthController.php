<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
<<<<<<< HEAD
            
class AuthController extends Controller
{
    // Login function for both admin and regular user
=======

class AuthController extends Controller
{
    // Login function
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:15',
        ]);

        if ($validator->fails()) {
            Alert::error('Error', 'Pastikan semua email dan password terisi dengan benar!');
            return redirect()->back();
        }

<<<<<<< HEAD
        // Check for admin login attempt
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            toast('Selamat datang admin!', 'success');
            return redirect()->route('admin.dashboard');
        } 
        // Check for regular user login attempt
        elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            toast('Selamat datang!', 'success');
            return redirect()->route('user.dashboard');
        } 
        // Login failed
        else {
=======
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            toast('Selamat datang admin!', 'success');
            return redirect()->route('admin.dashboard');
        } elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            toast('Selamat datang!', 'success');
            return redirect()->route('user.dashboard');
        } else {
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
            Alert::error('Login Gagal!', 'Email atau password tidak valid!');
            return redirect()->back();
        }
    }

    // Admin logout function
<<<<<<< HEAD
    public function admin_logout() 
=======
    public function admin_logout()
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
    {
        Auth::guard('admin')->logout();
        toast('Berhasil logout!', 'success');
        return redirect('/');
    }

    // User logout function
<<<<<<< HEAD
    public function user_logout() 
=======
    public function user_logout()
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
    {
        Auth::logout();
        toast('Berhasil logout!', 'success');
        return redirect('/');
    }

<<<<<<< HEAD
    // Register function for regular user
=======
    // Register function
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
    public function register()
    {
        return view('register');
    }

<<<<<<< HEAD
=======
    // Post register function
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
    public function post_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email:dns',
<<<<<<< HEAD
            'password' => 'required|min:8|max:8',
=======
            'password' => 'required|min:8|max:15',
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal!', 'Pastikan semua terisi dengan benar!');
            return redirect()->back();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'point' => 10000,
        ]);

        if ($user) {
            Alert::success('Berhasil!', 'Akun baru berhasil dibuat, silahkan melakukan login!');
            return redirect('/');
        } else {
            Alert::error('Gagal!', 'Akun gagal dibuat, silahkan coba lagi!');
            return redirect()->back();
        }
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 726849b5100a98f8d4a1dba7d931c8a697dfb10d
