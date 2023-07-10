<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body style="background-color:#f8f9fa">
    @include("includes.navbar")
    <section class="admin w-100 d-flex">
        <div class="adminSection" style="width:10%">
            @include("dashboard.dashnav.adminsidenav")
        </div>
        <div style="width:90%">
            <div class="task-container container my-2 ">
                <form action="" method="post" class="d-flex justify-content-center">
                    @csrf
                    <input type="text" class="form-control shadow-none w-50 p-2 border border-dark"
                        placeholder="write task here..." name="taskDetail">
                    <button type="submit" class="btn btn-success mx-2">Add task</button>
                    <button type="submit" class="btn btn-success mx-2"><a href="/export/excel" class="text-decoration-none text-white">Export Excel</a></button>
                    <button type="submit" class="btn btn-danger mx-2"><a href="/export/pdf" class="text-decoration-none text-white">Export Pdf</a></button>
                </form>
                @if (session("success"))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session("success")}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
            <div class="taskTable container d-flex flex-column align-items-center w-100 ">
                <h4 class="text-danger">hello {{auth()->user()->name}}</h4>
                <div class="dataTable border border-2 rounded border-dark w-75 ">
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
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
                                    <a href={{ 'delet/' . $data['taskID'] }}>
                                        <button class="btn btn-primary">
                                            Delet
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
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    let table = new DataTable('#myTable');
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</script>

</html>