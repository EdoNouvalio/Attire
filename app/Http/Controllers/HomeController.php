<?php

namespace App\Http\Controllers;

use App\Models\ProductPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $items = ProductPackage::with(['galleries'])->get();
        return view('pages.home',[
            'items' => $items
        ]);
    }
}
