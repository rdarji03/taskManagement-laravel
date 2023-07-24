<?php

use App\Http\Controllers\authControll;
use App\Http\Controllers\downloadExcel;
use App\Http\Controllers\exportPdf;
use App\Http\Controllers\leaveHandle;
use App\Http\Controllers\mailController;
use App\Http\Controllers\taskController;
use App\Http\Controllers\userControll;
use App\Http\Controllers\viewControll;
use Illuminate\Support\Facades\Route;

Route::get("/", [viewControll::class, "loginView"])->name("login");
Route::get("register", [viewControll::class, "registerView"])->name("register");
Route::get("admin/home", [viewControll::class, "adminHome"])->name("admin.home")->middleware("is_admin");
Route::get('/logout', [authControll::class, "logout"])->name("logout");
Route::get('admin/delet/{taskID}', [taskController::class, "deletTask"]);
Route::get('admin/edit/{taskID}', [taskController::class, "editTask"]);
Route::get('/admin/user', [userControll::class, "showUser"])->name("admim.user");
Route::get('/admin/user/delet/{id}', [userControll::class, "deletUser"]);
Route::get("staff/home", [viewControll::class, "staffHome"])->name("staff.home");
Route::get("staff/update/{id}", [taskController::class, "updateForm"]);
Route::get("/export/excel", [downloadExcel::class, "export"]);
Route::get("/export/pdf", [exportPdf::class, "createPDF"]);
Route::get("/admin/addTask", [viewControll::class, "showForm"])->name("taskForm");
Route::get("/task/report/{assiggnedDate}/{endDate}", [exportPdf::class, "taskPdf"])->name("findTask");
Route::get("admin/importExcel", [downloadExcel::class, "viewImportExport"]);
Route::get("admin/appliedLeave", [leaveHandle::class, "showLeave"])->name("admin.leaveaction");
Route::get("admin/denied/{leaveId}", [leaveHandle::class, "deniedLeave"]);
Route::get("admin/approved/{leaveId}", [leaveHandle::class, "approveLeave"]);
Route::get("staff/sendMail", [viewControll::class, "showMailForm"])->name("staff.email");
Route::post("staff/sendMail", [mailController::class, "postMail"]);
Route::group(['middleware' => 'auth'], function () {
    Route::get("/staff/leave/{id}", [leaveHandle::class, "showStaffLeave"])->name("staff.leave");
    Route::get("/staff/leave/form/{id}", [leaveHandle::class, "showLeaveForm"]);
    Route::post("/staff/leave/form/{id}", [leaveHandle::class, "postLeave"]);
});
Route::post('admin/edit/{taskID}', [taskController::class, "updateTask"]);
Route::post("/importExcel", [downloadExcel::class, "upload"]);
Route::post("/findTask", [taskController::class, "findTask"]);
Route::post("/admin/addTask", [taskController::class, "addTask"]);
Route::post("staff/update/{id}", [taskController::class, "updateTaskStatus"]);
Route::post("register", [authControll::class, "registerPost"])->name("registerPost");
Route::post("/", [authControll::class, "loginPost"])->name("loginPost");
