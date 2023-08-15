<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductPackageRequest;
use App\Models\ProductPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Stringable;

class ProductPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = ProductPackage::all();

        return view('pages.admin.product-package.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.product-package.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductPackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        ProductPackage::create($data);
        return redirect()->Route('product-package.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = ProductPackage::findOrFail($id);

        return view('pages.admin.product-package.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = ProductPackage::findOrFail($id);
        $item->update($data);
        return redirect()->Route('product-package.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ProductPackage::findOrFail($id)->delete();
        return redirect()->route('product-package.index');
    }
}
