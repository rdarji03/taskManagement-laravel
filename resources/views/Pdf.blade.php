<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 7 PDF Example</title>
</head>

<body>
    <div class="container mt-5">

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">id</th>
                    <th scope="col">task info</th>
                    <th scope="col">task status</th>

                </tr>
            </thead>


            <tbody>
                @foreach($data as $data)
                <tr>
                    <th scope="row">{{ $data->taskID }}</th>
                    <td>{{ $data->taskInfo }}</td>
                    <td>{{ $data->taskStatus }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>