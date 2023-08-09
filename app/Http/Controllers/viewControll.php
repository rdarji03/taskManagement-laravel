<?php

namespace App\Http\Controllers;

use App\Models\alocatedTask;
use App\Models\User;
use App\Models\userAllocatedTask;
use Illuminate\Support\Facades\DB;

class viewControll extends Controller
{
    public function loginView()
    {
        return view("auth.login");
    }
    public function registerView()
    {
        return view("auth.register");
    }
    public function adminHome()
    {
        $taskAlocated = new alocatedTask();
        $userData = new User();
        $taskList = $taskAlocated->all();
        $uData=$userData->get(["id","name","u_type"]);
        $Task=DB::table("userAllocatedTask")->get();
        $userTask=json_decode($Task,true);
        return view("dashboard.admin.adminDashboard", ["taskList" => $userTask,"uData"=>$uData]);
    }
    public function staffHome($id)
    {
        $sid=(int)$id;
        $taskList = DB::table("userAllocatedTask")->where("id",$sid)->get();
        $result= json_decode($taskList ,true);
        return view("dashboard.staff.staffDashboard", ["taskList" => $result]);
    }
    public function showForm()
    {
        return view("dashboard.admin.addTask");
    }

    public function showMailForm()
    {
        return view("dashboard.staff.email");
    }
    public function showPasswordForm()
    {
        return view("auth.forgotPassword");
    }
    public function resetPasswordForm($token)
    {
        return view("auth.resertPasswordForm", ["token" => $token]);
    }

}
