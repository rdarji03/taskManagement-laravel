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
                    <div class="task-container container my-2 flex w-full justify-between">
                        <div class="searchForm ">
                            <form action="/findTask" method="post" class="flex gap-2">
                                @csrf
                                <div class="dateinp ">
                                    <input type="date" name="startDate" id="">
                                    <input type="date" name="endDate" id="">
                                </div>
                                <button class="bg-blue-500 hover:bg-blue-700 text-white  py-2 px-4 rounded"
                                    type="submit">Search task</button>
                            </form>
                        </div>

                        <div>

                            <button type="submit" class="bg-green-400 mx-2 p-2  border rounded"><a href="/admin/addTask"
                                    target="_blank" rel="noopener noreferrer"
                                    class="text-decoration-none text-white">Add task</a></button>
                            <button type="submit" class="bg-green-400 mx-2 p-2  border rounded "><a href="/export/excel"
                                    class="text-decoration-none text-white">Export Excel</a></button>
                            <button type="submit" class=" bg-green-400 mx-2 p-2  border rounded"><a href="/export/pdf"
                                    class="text-decoration-none text-white" target="_blank">Export Pdf</a></button>
                        </div>
                    </div>
                    <div class="taskTable container d-flex flex-column align-items-center w-100 ">

                        <div class="dataTable  border-2 rounded border-dark w-75" style="min-height: 36rem;overflow: auto;">
                            <table id="myTable" class="display">
                                <thead>
                                    <tr>
                                        <th scope="col" class=" text-center" style="text-align: center">Task No</th>
                                        <th scope="col" class="text-center" style="text-align: center">Task Information</th>
                                        <th scope="col" class="text-center" style="text-align: center">Assigned Date</th>
                                        <th scope="col" class="text-center" style="text-align: center">End Date</th>
                                        <th scope="col" class="text-center" style="text-align: center">Status</th>
                                        <th scope="col" class="text-center" style="text-align: center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <div class="">
                                        @foreach ($taskList as $data)
                                        <tr>
                                            <th scope="row" class="text-center">{{$data["taskID"]}}</th>
                                            <td class="text-center">{{$data["taskInfo"]}}</td>
                                            <td class="text-center">{{date('Y-m-d', strtotime($data["assignedDate"]))}}
                                            </td>
                                            <td class="text-center">{{date('Y-m-d', strtotime($data["endDate"]))}}</td>
                                            <td class="text-center">@if ($data["taskStatus"]==0)
                                                <span class="badge bg-gray-400 p-1 rounded text-gray-950">Not Completed</span>
                                                @elseif($data["taskStatus"]==1)
                                                <span class="badge bg-green-400 p-1 rounded">Completed</span>
                                                @else
                                                <span class="badge bg-blue-400 p-1 rounded">In progress</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a href={{ 'delet/' . $data['taskID'] }}>
                                                    <button class="bg-red-400 mx-2 p-1  border rounded">
                                                        <img src="{{ asset("img/action-icons/delet.png") }}" class="h-[1.5rem]" alt="description of myimage">
                                                    </button>
                                                </a>
                                                <a href={{ 'edit/' . $data['taskID'] }} target="_blank">
                                                    <button class="bg-blue-400 mx-2 p-1  border rounded">
                                                        <img src="{{ asset("img/action-icons/edit.png") }}" class="h-[1.5rem]" alt="description of myimage">
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