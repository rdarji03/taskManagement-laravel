<?php

namespace App\Imports;

use App\Models\alocatedTask;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TaskExcel implements ToCollection,WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        // return dd($rows); 
        foreach ($rows as $row) {
            alocatedTask::insert([

                'taskInfo' => $row['taskinfo'],
                'taskStatus' => $row['taskstatus'],
                'assignedDate' => $row['assigneddate'],
                'endDate' => $row['enddate'],
            ]);
        }
    }
}
