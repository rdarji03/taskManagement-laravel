<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task Pdf</title>
</head>

<body>
    <div class="container mt-5">
        <table border="1">
            <thead>
                <tr class="table-danger">
                    <th scope="col">id</th>
                    <th scope="col">task info</th>
                    <th scope="col" class="text-center">Task Status</th>
                    <th scope="col" class="text-center">Assigned Date</th>
                    <th scope="col">task status</th>

                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
                <tr>
                    <th scope="row">{{ $data->taskID }}</th>
                    <td>{{ $data->taskInfo }}</td>
                    <td class="text-center">@if ($data["taskStatus"]==0)
                        <span class="badge text-bg-secondary">Not Completed</span>
                        @elseif($data["taskStatus"]==1)
                        <span class="badge text-bg-success">Completed</span>
                        @else
                        <span class="badge text-bg-info">In progress</span>
                        @endif
                    </td>                    <td class="text-center">{{$data->assignedDate}}</td>
                    <td class="text-center">{{$data->endDate}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>