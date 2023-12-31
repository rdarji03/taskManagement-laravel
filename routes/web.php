<?php

use App\Http\Controllers\authControll;
use App\Http\Controllers\manageExcel;
use App\Http\Controllers\exportPdf;
use App\Http\Controllers\forgotPassword;
use App\Http\Controllers\leaveHandle;
use App\Http\Controllers\mailController;
use App\Http\Controllers\taskController;
use App\Http\Controllers\userControll;
use App\Http\Controllers\viewControll;
use Illuminate\Support\Facades\Route;

Route::get("/", [viewControll::class, "loginView"])->name("login");
Route::get("register", [viewControll::class, "registerView"])->name("register");
Route::get('/logout', [authControll::class, "logout"])->name("logout");
Route::get("staff/sendMail", [viewControll::class, "showMailForm"])->name("staff.email");
Route::get("resetPassword", [viewControll::class, "showPasswordForm"])->name("user.resetPasswordForm");
Route::get("updatePassword/{token}", [viewControll::class, "resetPasswordForm"])->name("user.resetPassword");
Route::get("/downloadSample", [manageExcel::class, "downloadSample"])->name("downloadExcel");
Route::get("staff/home/update/{id}", [taskController::class, "updateTaskStatus"]);

Route::group(["middleware" => "is_admin"], function () {
    Route::get("admin/home", [viewControll::class, "adminHome"])->name("admin.home");
    Route::get('admin/delet/{taskID}', [taskController::class, "deletTask"]);
    Route::get('admin/edit/{taskID}', [taskController::class, "editTask"]);
    Route::get('/admin/user', [userControll::class, "showUser"])->name("admim.user");
    Route::get('/admin/user/delet/{id}', [userControll::class, "deletUser"]);
    Route::get("/export/excel", [manageExcel::class, "export"]);
    Route::get("/export/pdf", [exportPdf::class, "createPDF"]);
    Route::get("/admin/addTask", [viewControll::class, "showForm"])->name("taskForm");
    Route::get("/task/report/{assiggnedDate}/{endDate}", [exportPdf::class, "taskPdf"])->name("findTask");
    Route::get("admin/importExcel", [manageExcel::class, "viewImportExport"]);
    Route::get("admin/appliedLeave", [leaveHandle::class, "showLeave"])->name("admin.leaveaction");
    Route::get("admin/denied/{leaveId}", [leaveHandle::class, "deniedLeave"]);
    Route::get("admin/approved/{leaveId}", [leaveHandle::class, "approveLeave"]);
});
Route::group(['middleware' => 'auth'], function () {
    Route::get("staff/home/{id}", [viewControll::class, "staffHome"])->name("staff.home");
    Route::get("/staff/leave/{id}", [leaveHandle::class, "showStaffLeave"])->name("staff.leave");
    Route::get("/staff/leave/form/{id}", [leaveHandle::class, "showLeaveForm"]);
    Route::post("/staff/leave/form/{id}", [leaveHandle::class, "postLeave"]);
});
Route::post("updatePassword/{token}", [forgotPassword::class, "updatePassword"]);
Route::post("/resetPassword", [forgotPassword::class, "resetPassword"]);
Route::post("staff/sendMail", [mailController::class, "postMail"]);
Route::post('admin/edit/{taskID}', [taskController::class, "updateTask"]);
Route::post("/importExcel", [manageExcel::class, "upload"]);
Route::post("/findTask", [taskController::class, "findTask"]);
Route::post("/addTask", [taskController::class, "addTask"]);
Route::post("register", [authControll::class, "registerPost"])->name("registerPost");
Route::post("/", [authControll::class, "loginPost"])->name("loginPost");
