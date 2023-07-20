<?php

namespace App\Http\Controllers;

use App\Models\alocatedTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class taskController extends Controller
{
    public function addTask(Request $req)
    {
        $taskData = $req->taskDetail;
        $assignedDate = $req->assignedDate;
        $endDate = $req->endDate;
        DB::table('alocatedTask')->insert(["taskInfo" => $taskData, "assignedDate" => $assignedDate, "endDate" => $endDate]);
        return redirect()->route("taskForm")->with("success", "task has been added");

    }
    public function deletTask($taskID)
    {
        alocatedTask::where('taskID', $taskID)->delete();
        return redirect()->route("admin.home");
    }
    public function updateForm()
    {
        return view("dashboard.admin.updateTask");
    }
    public function updateTaskStatus(Request $req, $id)
    {
        $status = $req->updateStatus;
        $tstatus = (int) $status;
        alocatedTask::where('taskID', $id)
            ->update([
                'taskStatus' => (int) $tstatus,
            ]);
        return redirect()->route("staff.home");
    }
    public function findTask(Request $req)
    {
        $endDate = $req->endDate;
        $eDate=date('Y-m-d', strtotime($endDate));
        $assignedDate = $req->startDate;
        $aDate=date('Y-m-d', strtotime($assignedDate));
        $result = alocatedTask::where('assignedDate', $aDate)->where("endDate", $eDate)->get();
        return view("dashboard.admin.findTask",["result" =>$result,"edate"=>$eDate,"aDate"=>$aDate]);
    }
    public function editTask(){
        return view("dashboard.admin.editTask");
    }
    public function updateTask(Request $req,$id)
    {
        $taskData = $req->taskDetail;
        $assignedDate = $req->assignedDate;
        $endDate = $req->endDate;
        alocatedTask::where('taskId', $id)->update(["taskInfo" => $taskData, "assignedDate" => $assignedDate, "endDate" => $endDate]);
        return redirect()->route("admin.home");
    }
}
