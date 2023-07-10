<?php
namespace App\Exports;
use App\Models\alocatedTask;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class taskData implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return alocatedTask::select("taskID", "taskInfo", "taskStatus")->get();
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["taskID", "taskInfo", "taskStatus"];
    }
}