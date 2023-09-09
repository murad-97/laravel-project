<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VolnteerController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\SentSmsController;

use App\Http\Controllers\SentSmsController;

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
    return view('pages.index');
});
Route::get('/categories/{id}',[VolnteerController::class, 'show'])
;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/dash', function () {
    return view('Dash.Home');
});


Route::get('/causes', function () {
    return view('pages.causes');
});

// Route::resource('pages', VolnteerController::class);
Route::get('/pages.causes/{id}', [VolnteerController::class, 'index'])->name('pages.causes');

Route::get('/pages.causes', [VolnteerController::class, 'search'])->name('pages.causes');


// Route::get('/pages.causes/{id}', [VolnteerController::class, 'orderbyname'])->name('pages.causes');
// Route::get('/pages.causes', [VolnteerController::class, 'orderbyname2'])->name('pages.causes');

// Route::get('/pages.causes', [CategoryController::class, 'categoryfilter'])->name('pages.causes');



// Route::get('/pages.causes/{id}', [VolnteerController::class, 'filtercategory'])->name('pages.causes');


Route::get('/sent-sms',[SentSmsController::class,'Sent']);