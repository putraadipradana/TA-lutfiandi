<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();

        return view('admin.products.products-index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.products-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'thumbnail' => 'image|file|max:10240',
            'name' => 'required|max:255',
            'slug' => 'required|unique:products',
            'variant' => 'required|max:255',
            'price' => 'required|numeric',
            'details' => 'required'
        ]);
        
        $validateData['thumbnail'] = $request->file('thumbnail')->store('product-image');

        Product::create($validateData);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return view('admin.products.products-edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'thumbnail' => 'image|file|max:10240',
            'name' => 'required|max:255',
            'variant' => 'required|max:255',
            'price' => 'required|numeric',
            'details' => 'required'
        ];

        if($request->slug != $product->slug) {
            $rules['slug'] = 'required|unique:products';
        }

        $validateData = $request->validate($rules);

            if($request->oldThumbnail) {
                Storage::delete($request->oldThumbnail);
            } else {
                $validateData['thumbnail'] = $request->file('thumbnail')->store('product-image');
            }


        Product::where('id', $product->id)
                ->update($validateData);

        return redirect()->route('products.index')
                        ->with('success', 'Berhasil di perbarui');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $product = Product::where('slug', $slug)->first();

        if($product->thumbnail) {
            Storage::delete($product->thumbnail);
        }
        
        Product::where('slug', $slug)->delete();

        return redirect()->route('products.index')->with('success', 'Berhasil di hapus!');
    }
}
