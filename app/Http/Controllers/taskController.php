<?php

namespace App\Http\Controllers;

use App\Models\alocatedTask;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class taskController extends Controller
{
    public function addTask(Request $req){
        $data=$req->taskDetail;       
        DB::table('alocatedTask')->insert(["taskInfo"=>$data]);
        return redirect()->route("admin.home")->with("success","task has been added");

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
