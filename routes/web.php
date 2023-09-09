<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VolnteerController;
use App\Http\Controllers\VolnteerdetailController;
use App\Http\Controllers\VolnteeritemController;
use App\Http\Controllers\PaypalController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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
Route::post('paypal/payment',[PaypalController::class, 'payment'])->name("paypal");
Route::get('paypal/success',[PaypalController::class, 'success'])->name("paypal_success");
Route::get('paypal/cancel',[PaypalController::class, 'cancel'])->name("paypal_cancel");

Route::get('/', [CategoryController::class, 'index']);

Route::get('/categories/{id}',[VolnteerController::class, 'show']);
Route::get('/volunteering/{id}',[VolnteerdetailController::class, 'index']);
Route::get('/volunteering item/{id}',[VolnteeritemController::class, 'index']);
Route::post('/volunteeringitem',[VolnteeritemController::class, 'store']);


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


//social login by google
Route::get('/googlelogin', [ProfileController::class, 'googleLogin']);
Route::get('/auth/google/callback', [ProfileController::class, 'googleHandle']);

