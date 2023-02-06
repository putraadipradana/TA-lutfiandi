<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeController extends Component
{
    public $productDetailModal = false;

    public function productDetail()
    {
        $this->productDetailModal = true;
    }

    public function render()
    {
        return view('livewire.home');
    }
}
