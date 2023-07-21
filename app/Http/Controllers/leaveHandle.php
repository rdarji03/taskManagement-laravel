<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class leaveHandle extends Controller
{
    function showStaffLeave(){
        return view("dashboard.staff.staffLeave");
    }
    function showLeaveForm(){
        return "form";
    }
}
