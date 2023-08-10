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
            <div >
                <div>
                    @include("includes.navbar")
                </div>
                <div class="taskTable container flex flex-col items-center w-full  justify-center">
                    <h4  class="text-3xl underline ">Staff list</h4>
                    <div class="dataTable border-solid border-2 border-gray-950 rounded	 w-[75%]" style="max-height: 36rem;overflow: auto;">
                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center" style="text-align: center">User Id</th>
                                    <th scope="col" class="text-center" style="text-align: center">Name</th>
                                    <th scope="col" class="text-center" style="text-align: center">Role</th>
                                    <th scope="col" class="text-center" style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <div class="">
                                    @foreach ($userData as $data)
                                    @if ($data["u_type"]==0)


                                    <tr>
                                        <th scope="row" class="text-center" >{{$data["id"]}}</th>
                                        <td class="text-center">{{$data["name"]}}</td>
                                        <td class="text-center">@if($data["u_type"]==0)
                                            <p>Staff</p>

                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href={{ 'user/delet/' . $data['id'] }}>
                                                <button class=" bg-red-400 p-1 rounded text-white">
                                                    Remove
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endif

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
