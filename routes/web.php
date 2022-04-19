<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientSideController;
use App\Http\Controllers\FoodDetailController;
use App\Http\Controllers\usercontroller;
use App\Models\category;
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

Route::get('dashbord', function () {
    return view('layouts.app');
})->name('app');

// food menu

Route::get('index', [FoodDetailController::class, 'index'])->name('index')->middleware(['auth']);

Route::get('addfood', [FoodDetailController::class, 'addfrom'])->name('addfood')->middleware(['auth']);

Route::post('insert-food', [FoodDetailController::class, 'insert'])->name('insert_data')->middleware(['auth']);

Route::get('edit_food/{id}', [FoodDetailController::class, 'editData'])->name('edit_food')->middleware(['auth']);

Route::post('upadate_food', [FoodDetailController::class, 'updateData'])->name('upadate_food')->middleware(['auth']);

Route::get('delete_data/{id}', [FoodDetailController::class, 'deleteData'])->middleware(['auth']);

Route::get('view_foodDetail/{id}', [FoodDetailController::class, 'viewData'])->middleware(['auth']);

// category

Route::get('categorylist', [CategoryController::class, 'categoryshow'])->name('categorylist')->middleware(['auth'])->middleware(['auth']);

Route::get('add_category', [CategoryController::class, 'addCategory'])->name('add_category')->middleware(['auth'])->middleware(['auth']);

Route::post('insert-category', [CategoryController::class, 'categoryinsert'])->name('insert-category')->middleware(['auth'])->middleware(['auth']);

Route::get('edit_category/{id}', [CategoryController::class, 'editData'])->name('edit_category')->middleware(['auth'])->middleware(['auth']);

Route::post('upadate_category', [CategoryController::class, 'updateData'])->name('upadate_category')->middleware(['auth'])->middleware(['auth'])->middleware(['auth']);

Route::get('delete_category/{id}', [CategoryController::class, 'deleteData']);

//Resiter from

Route::get('register', [usercontroller::class, 'viewRegister'])->name('register');

Route::post('insert-user', [usercontroller::class, 'addNewUser'])->name('insert_user')->middleware(['auth']);

//loging 

Route::get('login', [usercontroller::class, 'loginform'])->name('login_form');

Route::post('login-user', [usercontroller::class, 'login'])->name('login');

// update profile

Route::get('edit_profile', [usercontroller::class, 'editprofile'])->name('edit_profile')->middleware(['auth']);

Route::post('upadate_profile', [usercontroller::class, 'updateUser'])->name('upadate_profile')->middleware(['auth']);

Route::get('logout', [usercontroller::class, 'logout'])->name('logout')->middleware(['auth']);

//update password

Route::get('update_password', [usercontroller::class, 'UpdatepasswordForm'])->name('update_password')->middleware(['auth']);

Route::post('password_update', [usercontroller::class, 'updatepassword'])->name('password_update')->middleware(['auth']);

// Dashbord

Route::get('/', [usercontroller::class, 'dashboard'])->name('dashboard')->middleware(['auth'])->middleware(['auth']);

//userside

Route::get('/home', [ClientSideController::class, 'UserHome'])->name('user_Home')->middleware(['auth']);

Route::get('/about', [ClientSideController::class, 'About'])->name('about')->middleware(['auth']);

Route::get('/gallery', [ClientSideController::class, 'Gallery'])->name('gallery')->middleware(['auth']);

Route::get('/contact_us', [ClientSideController::class, 'Contact_us'])->name('Contact_us')->middleware(['auth']);

//Cart

Route::get('/view_cart', [CartController::class, 'ViewCart'])->name('view_cart');

Route::get('add_to_cart/{menu_id}', [CartController::class, 'AddtoCart']);

Route::post('update_cart/{cart_id}/', [CartController::class, 'updatecart'])->name('update_cart');

Route::get('delete_cart/{cart_id}', [CartController::class, 'deleteCart']);
