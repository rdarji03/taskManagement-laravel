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
    @section("username",auth()->user()->name)
    <section class="admin w-100 d-flex">
        <div class="adminSection" style="width:10%">
            @include("dashboard.dashnav.adminsidenav")
        </div>
        <div style="width:90%">

            <div class="taskTable container d-flex flex-column align-items-center w-100 ">
                <h4 class="">User List</h4>
                <div class="dataTable border border-2 rounded border-dark w-75 ">
                    <table id="myTable" class="display">
                        <thead class="">
                            <tr class="">
                                <th scope="col" class="text-center">User Id</th>
                                <th scope="col" class="text-center">Name</th>
                                <th scope="col" class="text-center">Role</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userData as $data)
                            @if ($data["u_type"]==0)


                            <tr>
                                <th scope="row" class="text-center">{{$data["id"]}}</th>
                                <td class="text-center">{{$data["name"]}}</td>
                                <td class="text-center">@if($data["u_type"]==0)
                                    <p>Staff</p>

                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href={{ 'user/delet/' . $data['id'] }}>
                                        <button class="btn btn-danger">
                                            Remove
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endif

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