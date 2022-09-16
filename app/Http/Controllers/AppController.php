<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\MOdels\User;

class AppController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('home', compact('products'));

        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|string|max:30|unique:users',
            'password' => 'required|string|max:30',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('/login');
    }
}
