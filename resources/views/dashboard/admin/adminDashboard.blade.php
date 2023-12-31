<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="background-color:#f8f9fa">
    <div class="addTaskForm  fixed  z-10  min-h-full w-full hidden">
        <form action="/addTask" method="post"
            class="d-flex bg-white justify-content-center bg-body-secondary border rounded d-flex flex-column justify-content-center align-items-center p-1 shadow-lg"
            style="height: auto; width:25rem">
            @csrf
            <div class="closeIcon flex justify-end">
                <img src="{{ asset('img/action-icons/close.png') }}" alt="" srcset=""
                    class="h-[1.5rem] cursor-pointer" onclick="closeForm()">
            </div>
            <div class="mb-6 flex flex-col">
                <label for="task">Task</label>
                <input type="text" id="task" name="taskDetail"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <div class="mb-6 flex flex-col">
                <label for="assignedDate">Assigned Date:</label>
                <input type="date" id="assignedDate" name="assignedDate">
            </div>
            <div class="flex flex-col mb-6">
                <label for="endDate">End Date:</label>
                <input type="date" id="endDate" name="endDate">
            </div>
            <div class="flex flex-col mb-6">
                <label for="userName">Assign Task To:</label>
                <select name="uId" id="">
                    @foreach ($uData as $data)
                        @if ($data['u_type'] == 0)
                            <option value="{{ $data['id'] }}">{{ $data['name'] }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                Task</button>
        </form>
    </div>
    <section class="admin w-100 flex ">
        <div class="side-nav" style="width:10%">
            @include('dashboard.dashnav.adminsidenav')
        </div>
        <div class="adminSection w-[90%]">
            <div class="">
                @include('includes.navbar')
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

                            <button class="bg-green-400 mx-2 p-2  border rounded text-white" onclick="showForm()">Add
                                Task</button>
                            <button type="submit" class="bg-green-400 mx-2 p-2  border rounded "><a
                                    href="/export/excel" class="text-decoration-none text-white">Export
                                    Excel</a></button>
                            <button type="submit" class=" bg-green-400 mx-2 p-2  border rounded"><a href="/export/pdf"
                                    class="text-decoration-none text-white" target="_blank">Export Pdf</a></button>
                        </div>
                    </div>

                    <div class="taskTable container d-flex flex-column align-items-center w-100 ">

                        <div class="dataTable  border-2 rounded border-dark w-75"
                            style="max-height: 36rem;overflow: auto;">
                            <table id="myTable" class="display">
                                <thead>
                                    <tr>
                                        <th scope="col" class=" text-center" style="text-align: center">Task No</th>
                                        <th scope="col" class=" text-center" style="text-align: center">Assigned To
                                        </th>
                                        <th scope="col" class="text-center" style="text-align: center">Email
                                        </th>
                                        <th scope="col" class="text-center" style="text-align: center">Task
                                            Information
                                        </th>
                                        <th scope="col" class="text-center" style="text-align: center">Assigned Date
                                        </th>
                                        <th scope="col" class="text-center" style="text-align: center">End Date</th>
                                        <th scope="col" class="text-center" style="text-align: center">Status</th>
                                        <th scope="col" class="text-center" style="text-align: center">delete</th>
                                        <th scope="col" class="text-center" style="text-align: center">edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <div class="">
                                        @foreach ($taskList as $data)
                                            <tr>
                                                <th scope="row" class="text-center">{{ $data['taskID'] }}</th>
                                                <td scope="row" class="text-center">

                                                    {{ $data['name'] }}

                                                </td>
                                                <td scope="row" class="text-center">

                                                    {{ $data['email'] }}

                                                </td>
                                                <td class="text-center">{{ $data['taskInfo'] }}</td>
                                                <td class="text-center">
                                                    {{ date('d-m-Y', strtotime($data['assignedDate'])) }}
                                                </td>
                                                <td class="text-center">
                                                    {{ date('d-m-Y', strtotime($data['endDate'])) }}</td>
                                                <td class="text-center">
                                                    @if ($data['taskStatus'] == 0)
                                                        <span class="badge bg-gray-400 p-1 rounded text-white">Not
                                                            Completed</span>
                                                    @else
                                                        <span
                                                            class="badge bg-green-400 p-1 rounded text-white">Completed</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <a href={{ 'delet/' . $data['taskID'] }}>
                                                        <button class="bg-red-400 mx-2 p-1  border rounded">
                                                            <img src="{{ asset('img/action-icons/delet.png') }}"
                                                                class="h-[1.5rem]" alt="description of myimage">
                                                        </button>
                                                    </a>
                                                </td>
                                                <td>


                                                    <div class="editBtn bg-blue-400 mx-2 p-1  border rounded w-fit ">

                                                        <img src="{{ asset('img/action-icons/edit.png') }}"
                                                            class="h-[1.5rem] cursor-pointer" />

                                                        <div
                                                            class="hidden fixed  left-0  top-0 rounded editForm w-[100%] h-[100%] bg-[#ffffffba]">

                                                            <form action="{{ 'edit/' . $data['taskID'] }}"
                                                                method="post"
                                                                class="flex flex-col justify-center bg-body-secondary border rounded  p-1  bg-white w-[30rem] shadow-md eForm">

                                                                @csrf
                                                                <div class="closeBtn flex justify-end">
                                                                    <img src="{{ asset('img/action-icons/close.png') }}"
                                                                        class="h-[1.5rem] cursor-pointer " />
                                                                </div>
                                                                <div class="flex justify-center">
                                                                    <div class="formContainer"
                                                                        style="height: 15rem; width:20rem">
                                                                        <div
                                                                            class="mb-3  flex justify-between  items-center">
                                                                            <label for="task"
                                                                                class="">Task:</label>
                                                                            <input type="text"
                                                                                class="form-control shadow-none w-50 p-2 border border-dark w-[15rem]"
                                                                                id="task"
                                                                                placeholder="write task here..."
                                                                                name="taskDetail">
                                                                        </div>
                                                                        <div
                                                                            class="mb-3 flex justify-between items-center">
                                                                            <label for="assignedDate">Start
                                                                                Date:</label>
                                                                            <input type="date" id="assignedDate"
                                                                                class="w-[15rem]" name="assignedDate">
                                                                        </div>
                                                                        <div
                                                                            class="mb-3 flex justify-between items-center">
                                                                            <label for="endDate">End Date:</label>
                                                                            <input type="date" id="endDate"
                                                                                name="endDate" class="w-[15rem]">
                                                                        </div>
                                                                        <div class="flex justify-center">
                                                                            <input
                                                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                                                                type="submit" value="Update Task">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>

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
<script src="{{ asset('js/showForm.js') }}"></script>
<script src="{{ asset('js/showEditForm.js') }}"></script>

</html>
