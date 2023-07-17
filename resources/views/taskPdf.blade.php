<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task Pdf</title>
</head>



<body>
    <div class="head">
        <h2>Report of Task </h2>
        <div style="display: flex">
            from
            <span style="margin-right:0.5rem ">{{date('d-m-Y', strtotime($result[0]["assignedDate"]))}}</span>
            to
            <span style="margin-left:0.5rem ">{{date('d-m-Y', strtotime($result[0]["endDate"]))}}</span>
        </div>
    </div>
    </div>
    <table id="myTable" class="display" border="1">
        <thead>
            <tr>
                <th scope="col" class="text-center">Task No</th>
                <th scope="col" class="text-center">Task Information</th>
                <th scope="col" class="text-center">Assigned Date</th>
                <th scope="col" class="text-center">End Date</th>
                <th scope="col" class="text-center">Status</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($result as $data)
            <tr>
                <th scope="row" class="text-center">{{$data["taskID"]}}</th>
                <td class="text-center">{{$data["taskInfo"]}}</td>
                <td class="text-center">{{date('d-m-Y', strtotime($data["assignedDate"]))}}</td>
                <td class="text-center">{{date('d-m-Y', strtotime($data["endDate"]))}}</td>
                <td class="text-center">@if ($data["taskStatus"]==0)
                    <span class="badge text-bg-secondary">Not Completed</span>
                    @elseif($data["taskStatus"]==1)
                    <span class="badge text-bg-success">Completed</span>
                    @else
                    <span class="badge text-bg-info">In progress</span>
                    @endif
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>