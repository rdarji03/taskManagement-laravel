<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
    @vite('resources/css/app.css')

</head>

<body style="background-color:#f8f9fa">
    <section class="admin w-100 flex ">
        <div class="side-nav" style="width:10%">
            @include("dashboard.dashnav.adminsidenav")
        </div>
        <div class="adminSection w-[90%]">
            <div class="">
                @include("includes.navbar")
                <div class="m-3 flex  flex-col items-center">

                    <div class="dataTable  border-2 rounded border-gray-900 w-full" style="height: 40rem">
                        <button><a href="/task/report/{{$aDate}}/{{$edate}}" target="_blank" rel="noopener noreferrer">
                                Generate Pdf</a></button>
                        <table id="myTable" class="display">
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
                                    <td class="text-center">{{date('Y-m-d', strtotime($data["assignedDate"]))}}</td>
                                    <td class="text-center">{{date('Y-m-d', strtotime($data["endDate"]))}}</td>
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
                    </div>
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