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
                        <a href="{{auth()->user()->id}}" target="_blank" rel="noopener noreferrer">Apply Leave</a>


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