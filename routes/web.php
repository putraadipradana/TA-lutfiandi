<?php

use App\Http\Controllers\ProductsController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function() {
    return view("livewire.home", [
        'products' => Product::latest()->get()
    ]);
})->name('index');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::resource('products', ProductsController::class)
    ->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
