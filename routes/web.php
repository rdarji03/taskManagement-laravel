<?php

use App\Http\Controllers\authControll;
use App\Http\Controllers\taskController;
use App\Http\Controllers\userControll;
use App\Http\Controllers\viewControll;
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

Route::get("/",[viewControll::class,"loginView"])->name("login");
Route::get("register",[viewControll::class,"registerView"])->name("register");
Route::get("admin/home",[viewControll::class,"adminHome"])->name("admin.home")->middleware("is_admin");
Route::get('/logout',[authControll::class,"logout"])->name("logout");
Route::get('admin/delet/{taskID}',[taskController::class,"deletTask"]);
Route::get('/admin/user',[userControll::class,"showUser"])->name("admim.user");
Route::get('/admin/user/delet/{id}',[userControll::class,"deletUser"]);
Route::get("staff/home",[viewControll::class,"staffHome"])->name("staff.home");
Route::get("staff/update/{id}",[taskController::class,"updateForm"]);


Route::post("staff/update/{id}",[taskController::class,"updateTask"]);
Route::post("admin/home",[taskController::class,"addTask"]);
Route::post("register",[authControll::class,"registerPost"])->name("registerPost");
Route::post("/",[authControll::class,"loginPost"])->name("loginPost");