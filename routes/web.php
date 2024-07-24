<?php

use App\Http\Controllers\Admin\AnimalController;
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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('admin/Animals',[AnimalController::class,'index'])->name('admin.Animals.index');
Route::get('admin/Animals/create',[AnimalController::class,'create'])->name('admin.Animals.create');


Route::post('admin/Animals',[AnimalController::class, 'store'])-> name('admin.Animals.store');
Route::get('admin/Animals/{animal}',[AnimalController::class,'show'])->name('admin.Animals.show');