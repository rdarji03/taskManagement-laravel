<?php

namespace App\Http\Controllers;

use App\Exports\taskData;
use App\Imports\taskExcel;
use App\Imports\TaskExcel as ImportsTaskExcel;
use App\Imports\TaskList;
use App\Models\alocatedTask;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class downloadExcel extends Controller
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function index()
    {
        $users = alocatedTask::get();

        return view('excel', compact('users'));
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new taskData, 'task.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        Excel::import(new alocatedTask, request()->file('file'));
        return back();
    }
    public function upload(Request $request)
    {
        // if ($request->file('taskdetail') == null) {
        //     return "null";
        // }else{
        //    $file = $request->file('taskdetail')->store('images');  
        // }



        // request()->validate([
        //     'taskExcel' => 'required|mimes:xlx,xls|max:2048',
        // ]);
        try {
            $filepath=$request->file("taskdetail")->store("temp");
            // return $filepath;
            Excel::import(new TaskExcel,  $filepath);
            return "excel imported";

        } catch (\Exception $e) {
            dd($e->getMessage());
        }

    }
}
