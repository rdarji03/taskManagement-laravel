<?php
namespace App\Http\Controllers;

use App\Models\alocatedTask;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
class exportPdf extends Controller
{
    public function showTask()
    {
        $task = alocatedTask::all();
        return view('Pdf', compact('task'));
    }
    public function createPDF()
    {
        $data = alocatedTask::all();
        view()->share("Pdf",$data);
        $pdf = PDF::loadView('Pdf',compact('data'));
        return $pdf->stream();
    }
    public function taskPDf($d,$a){
       $result = alocatedTask::where('assignedDate', $d)->where("endDate", $a)->get();
       view()->share("taskPdf",$result);
       $pdf=PDF::loadView('taskPdf',compact("result"));
       return $pdf->stream();
    }

}
