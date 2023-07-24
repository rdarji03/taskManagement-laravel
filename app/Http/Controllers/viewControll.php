<?php

namespace App\Http\Controllers;

use App\Models\alocatedTask;

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
        $taskList = $taskAlocated->all();
        return view("dashboard.admin.adminDashboard", ["taskList" => $taskList]);
    }
    public function staffHome()
    {
        $taskAlocated = new alocatedTask();
        $taskList = $taskAlocated->all();
        return view("dashboard.staff.staffDashboard", ["taskList" => $taskList]);
    }
    public function showForm()
    {
        return view("dashboard.admin.addTask");
    }
    
    public function showMailForm()
    {
        return view("dashboard.staff.email");
    }

}
