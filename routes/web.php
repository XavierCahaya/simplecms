<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OutfitController;
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

Route::get('/', function () {return view('/auth/login');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/outfitAdd', [OutfitController::class, 'index']);
Route::post('/outfit', [OutfitController::class, 'store']);
Route::get('/outfitEdit/{id}', [OutfitController::class, 'edit'])->name('outfitEdit');
Route::put('/outfitEdit1/{id}', [OutfitController::class, 'update'])->name('outfitUpdate');
Route::delete('/outfitDelete/{id}', [OutfitController::class, 'delete'])->name('outfitDelete');


