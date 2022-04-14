<?php

use App\Http\Controllers\CategoryController;
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

Route::get('index', [FoodDetailController::class, 'index'])->name('index');

Route::get('addfood', [FoodDetailController::class, 'addfrom'])->name('addfood');

Route::post('insert-food', [FoodDetailController::class, 'insert'])->name('insert_data');

Route::get('edit_food/{id}', [FoodDetailController::class, 'editData'])->name('edit_food');

Route::post('upadate_food', [FoodDetailController::class, 'updateData'])->name('upadate_food');

Route::get('delete_data/{id}', [FoodDetailController::class, 'deleteData']);

Route::get('view_foodDetail/{id}', [FoodDetailController::class, 'viewData']);

// category

Route::get('categorylist', [CategoryController::class, 'categoryshow'])->name('categorylist');

Route::get('add_category', [CategoryController::class, 'addCategory'])->name('add_category');

Route::post('insert-category', [CategoryController::class, 'categoryinsert'])->name('insert-category');

Route::get('edit_category/{id}', [CategoryController::class, 'editData'])->name('edit_category');

Route::post('upadate_category', [CategoryController::class, 'updateData'])->name('upadate_category');

Route::get('delete_category/{id}', [CategoryController::class, 'deleteData']);

//Resiter from

Route::get('register', [usercontroller::class, 'viewRegister'])->name('register');

Route::post('insert-user', [usercontroller::class, 'addNewUser'])->name('insert_user');

//loging 

Route::get('login', [usercontroller::class, 'loginform'])->name('login_form');

Route::post('login-user', [usercontroller::class, 'login'])->name('login');

// update profile

Route::get('edit_profile', [usercontroller::class, 'editprofile'])->name('edit_profile');

Route::post('upadate_profile', [usercontroller::class, 'updateUser'])->name('upadate_profile');

Route::get('logout', [usercontroller::class, 'logout'])->name('logout');

//update password

Route::get('update_password', [usercontroller::class, 'UpdatepasswordForm'])->name('update_password');

Route::post('password_update', [usercontroller::class, 'updatepassword'])->name('password_update');

// Dashbord

Route::get('/', [usercontroller::class, 'dashboard'])->name('dashboard')->middleware(['auth']);

//user

Route::view('/abc', 'about');
