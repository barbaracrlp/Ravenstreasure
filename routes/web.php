<?php

use Illuminate\Support\Facades\Route;
//importo todos los conttroladores
//de momento me falta el de users



use App\Http\Controllers\DesignerController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TypeController;

use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;

Route::get('/', function () {
    return view('portada');
});

Route::get('/home', function () {
    return view('app');
})->name('home');

// Route::get('/', 'HomeController@index')->name('home');
Route::get('/designs', 'DesignController@index')->name('designs.index');

// Rutas de recursos

Route::resource('designers', DesignerController::class);
Route::resource('collections', CollectionController::class);

Route::resource('designs', DesignController::class);


Route::resource('categories', CategoryController::class);
Route::resource('types', TypeController::class);

Route::resource('carts', CartController::class);
Route::resource('cart-items', CartItemController::class);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


 // Rutas para el carrito
 Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
 Route::get('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
 Route::post('/cart/purchase', [CartController::class, 'purchase'])->name('cart.purchase');

 // Rutas para los elementos del carrito
 Route::post('/cart/add', [CartItemController::class, 'addToCart'])->name('cart.add');
 Route::patch('/cart/item/{cartItem}', [CartItemController::class, 'update'])->name('cart.item.update');
 Route::delete('/cart/item/{cartItem}', [CartItemController::class, 'destroy'])->name('cart.item.destroy');
