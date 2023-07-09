<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Products;
use App\Models\Categories;

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

Route::get('/', function () {
    $prods = Products::all();
    return Inertia::render('Welcome', [
        'prods' => $prods
    ]);
})->name('home');

Route::get('Login', function(){
    return Inertia::render('Login');
})->name('Login');
Route::get('Signin', function(){
    return Inertia::render('Signin');
})->name('Signin');

Route::get('admin', function(){
    $cats = Categories::all();
    return Inertia::render('Admin',['cats' => $cats]);
})->name('admin');

Route::post('/storelog', 'App\Http\Controllers\userController@login');
Route::post('/store', 'App\Http\Controllers\userController@store');

Route::post('/storearticle', 'App\Http\Controllers\productsController@store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
