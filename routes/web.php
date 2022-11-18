<?php

use App\Http\Controllers\OrderController;
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

Route::get('/', [OrderController::class, 'scan'])->name('order.scan');
Route::get('/table', [OrderController::class, 'table'])->name('order.table');
Route::post('/table', [OrderController::class, 'tablePost'])->name('order.tablePost');
Route::get('/order/{table}', [OrderController::class, 'order'])->name('order.order');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
