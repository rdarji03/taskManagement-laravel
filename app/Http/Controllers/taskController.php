<?php

namespace App\Http\Controllers;

use App\Models\alocatedTask;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class taskController extends Controller
{
    public function addTask(Request $req){
        $taskData=$req->taskDetail;   
        $assignedDate=$req->assignedDate;    
        $endDate=$req->endDate;    
        DB::table('alocatedTask')->insert(["taskInfo"=>$taskData,"assignedDate"=>$assignedDate,"endDate"=>$endDate]);
        return redirect()->route("taskForm")->with("success","task has been added");

    }
    public function deletTask($taskID){
        alocatedTask::where('taskID', $taskID)->delete();
        return redirect()->route("admin.home");
    }
    public function updateForm(){
        return view("dashboard.updateTask");
    }
    public function updateTask(Request $req,$id){
        $status=$req->updateStatus;
        $tstatus=(int)$status;
        alocatedTask::where('taskID', $id)
        ->update([
           'taskStatus' =>(int)$tstatus
        ]);
        return redirect()->route("staff.home");
    }
}
