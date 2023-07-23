<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Staff Dashboard</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />

   
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body>
    <div class="container">
        <section class="admin w-100 flex ">
            <div class="side-nav" style="width:10%">
                @include("dashboard.dashnav.staffsidenav")
            </div>
            <div class="adminSection w-[90%]">
                <div class="">
                    @include("includes.navbar")
                    <div class="m-3 flex  flex-col items-center">
                        <a href="/staff/leave/form/{{auth()->user()->id}}" target="_blank" rel="noopener noreferrer" class="">Apply Leave</a>
                    </div>
                    @if (session('success'))
                    <div id="alert-2"
                        class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="ml-3 text-sm font-medium">
                            {{session("success")}}
                        </div>
                        <button type="button"
                            class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                            data-dismiss-target="#alert-2" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                    @endif
                    <div class="taskTable container flex justify-center w-100 ">

                        <div class="dataTable  border-2 rounded border-gray-950 w-[75%]" style="min-height: 36rem;overflow: auto;">
                            <table id="myTable" class="display"> 
                                <thead>
                                    <tr>
                                        <th scope="col" class=" text-center" style="text-align: center">Leave Description</th>
                                        <th scope="col" class="text-center" style="text-align: center">From </th>
                                        <th scope="col" class="text-center" style="text-align: center">To</th>
                                        <th scope="col" class="text-center" style="text-align: center">Status</th>  
                                    </tr>
                                </thead>
                                <tbody>
                                    <div class="">
                                        @foreach ($leaveData as $data)
                                        <tr>
                                            <td scope="row" class="text-center">{{$data["leaveDesc"]}}</td>
                                            <td class="text-center">{{date('d-m-Y', strtotime($data["fromDate"]))}}
                                            </td>
                                            <td class="text-center">{{date('d-m-Y', strtotime($data["toDate"]))}}</td>
                                            <td class="text-center">@if ($data["leaveStatus"]==0)
                                                <span class="text-thin bg-blue-500 p-1 rounded text-white">Applied</span>
                                                @elseif($data["leaveStatus"]==1)
                                                <span class="badge bg-green-400 p-1 rounded">Approved</span>
                                                @else
                                                <span class="badge bg-blue-400 p-1 rounded">Denied</span>
                                                @endif
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