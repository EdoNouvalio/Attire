<?php

namespace App\Http\Controllers;

use App\Models\ProductPackage;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.cart');
    }
}
