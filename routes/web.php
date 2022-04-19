<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\buycontroller;
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

Route::get('/', [buycontroller::class, "show"]);

Route::get('add',[buycontroller::class, "add"]);

Route::post('add',[buycontroller::class, "store"]);

Route::get('edit/{orderid}', [buycontroller::class, "edit"])->name('editorder');

Route::post('edit/{orderid}',[buycontroller::class, "update"]);

Route::get('delete/{orderid}', [buycontroller::class, "destroy"])->name('deleteorder');


// Route::post("users", [buycontroller::class, "getData"]);
// Route::view("login",'form');