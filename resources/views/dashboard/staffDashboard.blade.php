<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Staff Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    @include("includes.navbar")
    <div class="container">
        @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{session("error")}}
        </div>
        @endif
    </div>
    <section class="admin w-100 d-flex">
        <div class="adminSection" style="width:10%">
            @include("dashboard.dashnav.staffsidenav")
        </div>
        <div style="width:90%">

            <div class="taskTable container d-flex flex-column align-items-center w-100 ">
                <h4 class="">Task Board</h4>
                <div class="dataTable border border-2 rounded border-dark w-75 ">
                    <table class="table">
                        <thead class="">
                            <tr class="">
                                <th scope="col" class="text-center">Task No</th>
                                <th scope="col" class="text-center">Task Information</th>
                                <th scope="col" class="text-center">Status</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($taskList as $data)
                            <tr>
                                <th scope="row" class="text-center">{{$data["taskID"]}}</th>
                                <td class="text-center">{{$data["taskInfo"]}}</td>
                                <td class="text-center">@if ($data["taskStatus"]==0)
                                    <span class="badge text-bg-secondary">Not Completed</span>
                                    @elseif($data["taskStatus"]==1)
                                    <span class="badge text-bg-success">Completed</span>
                                    @else
                                    <span class="badge text-bg-info">In progress</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href={{ 'update/' . $data['taskID'] }}>
                                        <button class="btn btn-primary">
                                            Update Status
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</script>

</html>