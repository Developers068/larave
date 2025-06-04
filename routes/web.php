<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

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


Route::get ('/', [PageController::class,'index'])->name('home');
Route::get ('/contactus', [PageController::class,'contactus'])->name('contactus');
Route::get ('/services', [PageController::class, 'sjut'])->name('services');
Route::get ('/blog', [PageController::class, 'blog'])->name('blog');
Route::get ('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/create', [ProductController::class, 'create'])->name('products.create');
Route::POST('/create', [ProductController::class, 'store'])->name('products.store');

Route::get('/', function () {
    return view('home');
})->name('home');



Route::get('/About', function () {
    return view('about');
})->name('about');

Route::get('/Employees', function () {
    return view('employees');
})->name('employees');

Route::get ('/location', [PageController::class, 'location'])->name('location');
