<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/index', function () {
//     return view('index');
// });

Route::get('/',[ProductController::class, 'index'])->name('index');
Route::get('about-product/{id}',[ProductController::class, 'AboutProduct'])->name('AboutProduct');
Route::post('store',[ProductController::class, 'store'])->name('store');
Route::get('edit_product/{id}',[ProductController::class, 'edit'])->name('edit_product');
Route::post('update_product/{id}',[ProductController::class, 'update'])->name('update_product');
Route::get('delete_product/{id}',[ProductController::class, 'destroy'])->name('destroy_product');
Route::get('restore_product/{id}',[ProductController::class, 'restore'])->name('restore_product');
Route::get('product_trash',[ProductController::class, 'trash'])->name('product_trash');
Route::get('ForceDelet_product/{id}',[ProductController::class, 'forcedelete'])->name('ForceDelet_product');

Route::get('/products', function () {
    $products = product::all();
    return view('admin.product',compact('products'));
})->middleware(['auth', 'verified'])->name('product');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/inserer', function () {
    return view('admin.inserer');
})->name('product_insert');

// Route::post('inserer/store',[ProductController::class, 'store'])->name('store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
