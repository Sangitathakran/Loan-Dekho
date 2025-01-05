<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function home()
    {
        // return redirect('dashboard');
        $products = Product::all();
        return view('frontend.home', compact('products'));
    }
}
