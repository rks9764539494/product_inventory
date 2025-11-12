<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
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
    return view('welcome');
});

// All product inventory routes
Route::get('inventory/index',[InventoryController::class,'index'])->name('inventory.index');
Route::get('inventory/create',[InventoryController::class,'create'])->name('inventory.create');
Route::post('inventory/store',[InventoryController::class,'store'])->name('inventory.store');
Route::get('inventory/{id}/edit',[InventoryController::class,'edit'])->name('inventory.edit');
Route::post('inventory/{id}/update',[InventoryController::class,'update'])->name('inventory.update');
Route::get('inventory/{id}/show',[InventoryController::class,'show'])->name('inventory.show');
Route::delete('inventory/{id}/destroy',[InventoryController::class,'destroy'])->name('inventory.destroy');
