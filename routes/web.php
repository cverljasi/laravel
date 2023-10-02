<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TokenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardmgt;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

Route::post('welcome', function () {
    return view('pages.tokenverify');
});
*/

Route::get('/', function () {
    return view('firstwelcome');
});

Route::resource('check', TokenController::class);



  Route::get('/dashboard', function () {
    return view('dashboard');
    //Route::resource('/dashboard', dashboardmgt::class);
    
})->middleware(['auth', 'verified'])->name('dashboard'); 




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


 Route::middleware('auth')->group(function () {
    //Route::resource('/content', dashboardmgt::class); 
    Route::get('/content', [dashboardmgt::class, 'edit'])->name('content.edit');
    Route::post('/content', [dashboardmgt::class, 'store'])->name('content.store');
    //Route::delete('/content', [dashboardmgt::class, 'destroy'])->name('dashboard.destroy');
}); 

require __DIR__.'/auth.php';
