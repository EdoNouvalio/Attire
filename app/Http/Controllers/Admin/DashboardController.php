<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductPackage;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    Public function index(Request $request)
    {
        return view('pages.admin.dashboard',[
            'product_package' => ProductPackage::count(),
            'transaction' => Transaction::count()

        ]);
    }
}
