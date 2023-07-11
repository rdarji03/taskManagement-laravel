<?php

namespace App\Http\Controllers;

use App\Models\alocatedTask;
use App\Models\User;
use Illuminate\Http\Request;

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
        $taskAlocated=new alocatedTask();
        $taskList=$taskAlocated->all();
        return view("dashboard.adminDashboard",["taskList"=>$taskList]);
    }
    public function staffHome()
    {
        $taskAlocated=new alocatedTask();
        $taskList=$taskAlocated->all();
        return view("dashboard.staffDashboard",["taskList"=>$taskList]);
    }
    public function showForm(){
        return  view("dashboard.addTask");
    }

}
