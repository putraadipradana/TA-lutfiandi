<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductsGrid extends Component
{
    public $productDetail = false;
    public $thumbnail;
    public $name;
    public $slug;
    public $variant;
    public $price;
    public $details;

    public function productDetailModal($id)
    {
        $product = Product::findOrFail($id);
        $this->thumbnail = $product->thumbnail;
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->variant = $product->variant;
        $this->price = $product->price;
        $this->details = $product->details;
        $this->productDetail = true;
    }

    public function render()
    {
        $products = Product::latest()->get();

        return view('livewire.products-grid', [
            'products' => $products
        ]);
    }
}
