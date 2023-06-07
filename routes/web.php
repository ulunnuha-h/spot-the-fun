<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Event;
use App\Http\Controllers\Welcome;
use App\Http\Controllers\History;
use App\Http\Controllers\Order;
use Illuminate\Contracts\View\View;

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

Route::get('/', [Welcome::class, 'index']);

Route::middleware('auth')->group(function () {
});

Route::prefix('test')->group(function() {
    Route::get('/register', function() {
        return view('register');
    });
    Route::get('/login',function() {
        return view('login');
    });
});

Route::controller(Event::Class)->group(function(){
    Route::get("/event/{id}",'description');
    Route::get("/event/{id}/category",'category');
});

Route::controller(History::Class)->group(function(){
    Route::get("/history",'index');
    Route::get("/history/{id}",'detail');
});

Route::get("/order", [Order::class, 'index'])->name('order');

require __DIR__.'/auth.php';
