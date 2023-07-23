<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
    @vite(['resources/css/app.css','resources/js/app.js'])

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


                    <div class="taskTable container d-flex flex-column align-items-center w-100 ">

                        <div class="dataTable  border-2 rounded border-dark w-75"
                            style="max-height: 36rem;overflow: auto;">
                            <table id="myTable" class="display">
                                <thead>
                                    <tr>
                                        <th scope="col" class=" text-center" style="text-align: center">Staff Name</th>
                                        <th scope="col" class="text-center" style="text-align: center">Leave Reason
                                        </th>
                                        <th scope="col" class="text-center" style="text-align: center">From
                                        </th>
                                        <th scope="col" class="text-center" style="text-align: center">To</th>
                                        <th scope="col" class="text-center" style="text-align: center">Status</th>
                                        <th scope="col" class="text-center" style="text-align: center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <div class="">
                                        @foreach ($data as $data)
                                        <tr>
                                            <th scope="row" class="text-center">{{$data["name"]}}</th>
                                            <td class="text-center">{{$data["leaveDesc"]}}</td>
                                            <td class="text-center">{{date('Y-m-d', strtotime($data["From"]))}}
                                            </td>
                                            <td class="text-center">{{date('Y-m-d', strtotime($data["To"]))}}</td>
                                            <td class="text-center">@if ($data["leaveStatus"]==0)
                                                <span class="badge bg-gray-400 p-1 rounded text-gray-950">Denied</span>
                                                @elseif($data["leaveStatus"]==1)
                                                <span class="badge bg-green-400 p-1 rounded">Approved</span>
                                                @elseif($data["leaveStatus"]==2)
                                                <span class="badge bg-blue-400 p-1 rounded">Applied</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a href={{ 'approved/' . $data['leaveId'] }} >
                                                    <button class="bg-blue-400 mx-2 p-1  border rounded">
                                                        <img src="{{ asset("img/action-icons/approved.png") }}"
                                                        class="h-[1.5rem]" alt="description of myimage">
                                                    </button>
                                                </a>
                                                <a href={{ 'denied/' . $data['leaveId'] }}>
                                                    <button class="bg-red-400 mx-2 p-1  border rounded">
                                                        <img src="{{ asset("img/action-icons/denied.png") }}"
                                                            class="h-[1.5rem]" alt="description of myimage">
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </div>
                                </tbody>
                            </table>
                        </div>
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