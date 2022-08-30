<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChangeController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Database\Schema\Grammars\ChangeColumn;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/redirects', [HomeController::class, 'redirects']);


Route::middleware(['auth'])->group(function () {

    Route::get('/users', [AdminController::class, 'user'])->name('users');
    Route::get('/users/{id}', [AdminController::class, 'delete'])->name('delete');
    
    Route::get('/profilee/{id}', [ProfileController::class, 'show'])->name('profilee.show');
    Route::post('profilee/{id}', [ProfileController::class, 'update'])->name('profilee.store');

    Route::get('change_password/{id}', [ChangeController::class, 'show'])->name('showpassword');
    Route::post('change_password/{id}', [ChangeController::class, 'update'])->name('updatepassword');

    Route::get('food', [FoodController::class, 'index'])->name('foodmenu');
    Route::get('createfood', [FoodController::class, 'create'])->name('view');
    Route::post('storefood', [FoodController::class, 'store'])->name('uploadfood');
    Route::get('updatefood/{id}', [FoodController::class, 'edit'])->name('updateview');
    Route::post('updatefoodd/{id}', [FoodController::class, 'update'])->name('updatevieww');
    Route::get('destroyy/{id}', [FoodController::class, 'destroy'])->name('deletefood');


    Route::post('reservation', [AdminController::class, 'reservation'])->name('reservation');
    Route::get('viewreservation', [AdminController::class, 'viewreservation'])->name('viewreservation');


    Route::get('chef', [ChefController::class, 'index'])->name('viewchef');
    Route::get('showchef', [ChefController::class, 'show'])->name('showchef');
    Route::post('storechef', [ChefController::class, 'store'])->name('uploadchef');
    Route::get('updatechef/{id}', [ChefController::class, 'edit'])->name('updatechef');
    Route::post('updatecheff/{id}', [ChefController::class, 'update'])->name('updattechef');
    Route::get('destroy/{id}', [ChefController::class, 'destroy'])->name('deletechef');

    Route::get('details/{id}',[FoodController::class, 'details'])->name('details');
    Route::get('orders',[OrderController::class,'index'])->name('orders');
    
});

// Route::get('information',[InformationController::class,'index'])->name('information');
Route::get('information',[InformationController::class,'create'])->name('information');
Route::post('createinformation',[InformationController::class,'store'])->name('createinformationn');

Route::post('addcart/{id}', [HomeController::class, 'addcart'])->name('addcart');
Route::get('showcart/{id}', [HomeController::class, 'showcart'])->name('showcart');
Route::get('deletecart/{id}',[HomeController::class,'destroy'])->name('deletecart');
Route::post('orderconfirm', [HomeController::class, 'orderconfirm'])->name('orderconfirm');


// Route::get('log', function () {
//     return view('loginn');
// });

// Route::get('reg', function () {
//     return view('registerr');
// });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});