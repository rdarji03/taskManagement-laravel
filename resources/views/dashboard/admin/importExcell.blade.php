<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Import Task</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body style="background-color:#f8f9fa">
    <div class="sampleExcel" style="display: none">
        <div class="sample w-[25rem]">        
        <div class="closeIcon flex justify-end">
            <img src="{{asset("img/action-icons/close.png")}}" alt="" srcset="" class="h-[1.5rem] cursor-pointer"
                onclick="closeImg()">
        </div>
        <img src="{{asset("img/sampleExcel.png")}}" alt="" srcset="">
    </div>
</div>
    <section class="admin w-100 flex ">
        <div class="side-nav" style="width:10%">
            @include("dashboard.dashnav.adminsidenav")
        </div>
        <div class="adminSection w-[90%]">
            <div class="">
                @include("includes.navbar")
                <div class="excelFunctionContainer flex flex-col items-center my-4">
                    <div class="banner ">
                        <h4 class="text-3xl underline ">Import Task</h4>
                    </div>
                    <div class="excelForm  border-2 h-[10rem] w-[80%] shadow-lg flex flex-col justify-center items-center">
                        <form action="/importExcel" method="post"  enctype="multipart/form-data" class="w-[90%] ">
                            @csrf
                            <div class="py-3">
                                <input type="file" name="taskdetail" id="" class=" border-2 w-full" required>
                            </div>
                            <div class="flex justify-between">
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-[20%]">Import
                                    Excel</button>
                        </form>
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
<script src="{{asset("js/showSample.js")}}"></script>


</html>