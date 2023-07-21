<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-primary">
    <div class="container min-vh-100 d-flex justify-content-center align-items-center flex-column">
        @if (session("success"))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session("success")}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
        <div class="form-container">
            <form action="" method="post"
                class="d-flex justify-content-center bg-body-secondary border rounded d-flex flex-column justify-content-center align-items-center p-1"
                style="height: 15rem; width:25rem">
                @csrf
                <div class="d-flex align-items-center">
                    <label for="task" class="mx-3">Task</label>
                    <input type="text" class="form-control shadow-none w-50 p-2 border border-dark" id="task"
                        placeholder="write task here..." name="taskDetail">
                </div>
                <div class="mb-3">
                    <label for="assignedDate">Assigned Date:</label>
                    <input type="date" id="assignedDate" name="assignedDate">
                </div>
                <div class="mb-3">
                    <label for="endDate">End Date:</label>
                    <input type="date" id="endDate" name="endDate">
                </div>
                <button type="submit" class="btn btn-success mx-2">Update Task</button>

            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html> 