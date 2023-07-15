<?php

namespace App\Imports;

use App\Models\alocatedTask;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class TaskList implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            alocatedTask::create([
                'taskInfo'=>$row['taskInfo'],
                'taskStatus'=>$row['taskInfo'],
                'assignedDate'=>$row['taskInfo'],
                'endDate'=>$row['taskInfo'],
            ]);
        }
    }
}
