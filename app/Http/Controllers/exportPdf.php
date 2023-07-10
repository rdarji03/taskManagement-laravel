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
        // retreive all records from db
        $data = alocatedTask::all();
        view()->share("Pdf",$data);
        $pdf = PDF::loadView('Pdf',compact('data'));
        return $pdf->stream();
    }
}
