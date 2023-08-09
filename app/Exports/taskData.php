<?php
namespace App\Exports;
use App\Models\alocatedTask;
use App\Models\userAllocatedTask;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class taskData implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return userAllocatedTask::select("name", "email","taskInfo", "assignedDate","endDate","taskStatus")->get();
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["name", "email","taskInfo", "assignedDate","endDate","taskStatus"];
    }
}