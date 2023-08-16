<?php

namespace App\Http\Controllers;

use App\Exports\taskData;
use App\Imports\taskExcel;
use App\Models\alocatedTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

class manageExcel extends Controller
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function viewImportExport(){
        return view("dashboard.admin.importExcell");
    }

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
        return redirect()->route("admin.home");
    }
    public function upload(Request $request)
    {
        try {
            $filepath = $request->file("taskdetail")->store("temp");
            // return $filepath;
            Excel::import(new TaskExcel, $filepath);
            return redirect()->route("admin.home");

        } catch (\Exception $e) {
            dd($e->getMessage());
        }

    }
    public function downloadSample(){
        $file_path = public_path('sampleFile/taskSample.xlsx');
        return response()->download($file_path);
    }
}
