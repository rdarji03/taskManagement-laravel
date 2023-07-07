<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body style="background-color:#f8f9fa">
    @include("includes.navbar")
    @section("username",auth()->user()->name)
    <section class="admin w-100 d-flex">
        <div class="adminSection" style="width:10%">
            @include("dashboard.dashnav.sidenav")
        </div>
        <div style="width:90%">
            <div class="task-container container my-2 ">
                <form action="" method="post" class="d-flex justify-content-center">
                    @csrf
                    <input type="text" class="form-control shadow-none w-50 p-2 border border-dark"
                        placeholder="write task here..." name="taskDetail">
                    <button type="submit" class="btn btn-success mx-2">Add task</button>
                </form>
                @if (session("success"))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session("success")}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
            <div class="taskTable container d-flex flex-column align-items-center w-100 ">
                <h4 class="">Task Board</h4>
                <div class="dataTable border border-2 rounded border-dark w-75 ">
                    <table class="table">
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
                            <tr>
                                <th scope="row" class="text-center">{{$data["id"]}}</th>
                                <td class="text-center">{{$data["name"]}}</td>
                                <td class="text-center">@if($data["u_type"]==1)
                                    <p>Admin</p>                            
                                    @else
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
