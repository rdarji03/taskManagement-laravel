<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-primary">
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <form action="" method="post"
            class="bg-body-secondary border rounded d-flex flex-column justify-content-center align-items-center"
            style="height: 10rem; width:20rem">
            @csrf
            <div class="status my-2">
                <select name="updateStatus" id="" class="form-group p-1 border-1 rounded ">
                    <option value="0">Not Completed</option>
                    <option value="2">In Progress</option>
                    <option value="1">Completed</option>
                </select>
            </div>
            <div class="btns">
                <button type="submit" class="btn btn-success">Update</button>
                <button type="submit" class="btn bg-danger"><a href="/staff/home"
                        class="text-white text-decoration-none">Dashoard</a></button>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>