<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GalleryRequest;
use App\Models\Gallery;
use App\Models\ProductPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function Ramsey\Uuid\v1;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Gallery::with(['product_package'])->get();

        return view('pages.admin.gallery.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product_packages = ProductPackage::all();
        return view('pages.admin.gallery.create',[
            'product_packages' => $product_packages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GalleryRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        );

        Gallery::create($data);
        return redirect()->Route('gallery.index');
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
        $item = Gallery::findOrFail($id);
        $product_packages = ProductPackage::all();


        return view('pages.admin.gallery.edit', [
            'item' => $item,
            'product_packages' => $product_packages
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        );

        $item = Gallery::findOrFail($id);
        $item->update($data);
        return redirect()->Route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Gallery::findOrFail($id)->delete();
        return redirect()->route('gallery.index');
    }
}
