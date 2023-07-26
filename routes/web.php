<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\guarantee;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [Frontend::class, 'index'])->name('main');
Route::get('/company', [CompanyController::class, 'index'])->name('company');
Route::get('/guarantee', [guarantee::class, 'index'])->name('guarantee');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/{name}', [ProductController::class, 'index'])->name('product');
Route::post('mail/recall',[EmailController::class, 'sendMailRecall'])->name('send-mail-recall');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
