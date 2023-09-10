<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserDashController;
use App\Http\Controllers\VolunteerDashController;
use App\Http\Controllers\CategoryDashController;
use App\Http\Controllers\AdminDashController;
use App\Http\Controllers\VolnteeritemDashController;
use App\Http\Controllers\VolnteerdetailDashController;
use App\Http\Controllers\ServicesDashController;
use App\Http\Controllers\equipmentDashController;
use App\Http\Controllers\MedicineDashController;
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
    return view('pages.index');
});

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

Route::get('/addcat', function () {
    return view('Dash.addCategory');
})->name('add_cat');

// Route::get('/volunteers', function () {
//     return view('Dash.volunteers');
// })->name('volunteers');

Route::get('/deletevolunteers/{id}',[VolunteerDashController::class,'destroy'])->name('delete_volunteer');

Route::get('/user',[UserDashController::class,'index'])->name('allusers');
Route::get('/deleteuser/{id}',[UserDashController::class,'destroy'])->name('del');
Route::get('/volunteers',[VolunteerDashController::class,'index'])->name('all_volunteers');
Route::get('/category',[CategoryDashController::class,'index'])->name('all_categories');
Route::get('/delete/{id}',[CategoryDashController::class,'destroy'])->name('delete_category');
Route::get('/edit_category/{id}',[CategoryDashController::class,'edit'])->name('edit_category');

Route::post('/edite_category',[CategoryDashController::class,'update'])->name('edite_category');

Route::POST('/addcat',[CategoryDashController::class,'store'])->name('Add_category');







// Route::get('/delete/{id}',[VolunteerDashController::class,'destroy'])->name('delete_volunteer');
Route::POST('/add',[VolunteerDashController::class,'store'])->name('Add_volunteer');

// .....................................................admin>>>>>>>>>>>>>>>>>>>>>>>>


Route::resource('admin', AdminDashController::class);


Route::resource('services', ServicesDashController::class);

Route::resource('equipment', equipmentDashController::class);

Route::resource('medicine', MedicineDashController::class);

Route::get('/detail',[VolnteeritemDashController::class,'index'])->name('all_details');

Route::get('/item',[VolnteerdetailDashController::class,'index'])->name('all_details');

Route::resource('category', CategoryDashController::class);



