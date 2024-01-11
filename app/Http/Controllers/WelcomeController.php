<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class WelcomeController extends Controller
{
    public function index()
    {
        $products = Produk::latest()->get();
        return view('welcome', compact('products'));
    }
}
