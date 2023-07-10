<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\taskData;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\alocatedTask;

class downloadExcel extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $users = alocatedTask::get();
  
        return view('welcome', compact('users'));
    }
        
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new taskData, 'users.xlsx');
    }
       
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new alocatedTask,request()->file('file'));
        return back();
    }
}