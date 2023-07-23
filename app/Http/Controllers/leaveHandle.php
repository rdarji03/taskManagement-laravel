<?php

namespace App\Http\Controllers;

use App\Models\leaveTable;
use App\Models\staffLeaveTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class leaveHandle extends Controller
{
    function showStaffLeave($id){
        $leaveData=staffLeaveTable::where('id', $id)->get(["leaveDesc","fromDate","toDate","leaveStatus"]);;    
        return view("dashboard.staff.staffLeave",["leaveData"=>$leaveData]);
    }
    function showLeaveForm(){
        return view("dashboard.staff.leaveForm");
    }
    function postLeave(Request $req,$id){
        $leaveDesc=$req->leaveDesc;
        $fromDate=$req->startDate;
        $toDate=$req->toDate;
        DB::table('staffLeaveTable')->insert(["id"=>$id,"leaveDesc"=>$leaveDesc,"fromDate"=>$fromDate,"toDate"=>$toDate]);
        return Redirect::back()->with('msg','Leave Request Sent Successfully');
    }

    function showLeave(){
        $leaveList=new leaveTable;
        $data=$leaveList->all();
        // return $data;
        return view("dashboard.admin.appliedLeave",["data"=>$data]);
    }
    function deniedLeave($id){
        DB::table("staffLeaveTable")->where("leaveId",$id)->update(["leaveStatus"=>0]);
        return redirect()->route("admin.leaveaction");
    }
    function approveLeave($id){
        DB::table("staffLeaveTable")->where("leaveId",$id)->update(["leaveStatus"=>1]);
        return redirect()->route("admin.leaveaction");

    }
}
