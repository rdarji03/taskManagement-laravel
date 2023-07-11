<?php

use App\Exports\taskData;
use App\Http\Controllers\authControll;
use App\Http\Controllers\taskController;
use App\Http\Controllers\userControll;
use App\Http\Controllers\viewControll;
use App\Http\Controllers\downloadExcel;
use App\Http\Controllers\exportPdf;
use Illuminate\Support\Facades\Route;

Route::get("/",[viewControll::class,"loginView"])->name("login");
Route::get("register",[viewControll::class,"registerView"])->name("register");
Route::get("admin/home",[viewControll::class,"adminHome"])->name("admin.home")->middleware("is_admin");
Route::get('/logout',[authControll::class,"logout"])->name("logout");
Route::get('admin/delet/{taskID}',[taskController::class,"deletTask"]);
Route::get('/admin/user',[userControll::class,"showUser"])->name("admim.user");
Route::get('/admin/user/delet/{id}',[userControll::class,"deletUser"]);
Route::get("staff/home",[viewControll::class,"staffHome"])->name("staff.home");
Route::get("staff/update/{id}",[taskController::class,"updateForm"]);
Route::get("/export/excel",[downloadExcel::class,"export"]);
Route::get("/export/pdf",[exportPdf::class,"createPDF"]);
Route::get("/admin/addTask",[viewControll::class,"showForm"])->name("taskForm");


Route::post("/admin/addTask",[taskController::class,"addTask"]);
Route::post("staff/update/{id}",[taskController::class,"updateTask"]);
Route::post("admin/home",[taskController::class,"addTask"]);
Route::post("register",[authControll::class,"registerPost"])->name("registerPost");
Route::post("/",[authControll::class,"loginPost"])->name("loginPost");