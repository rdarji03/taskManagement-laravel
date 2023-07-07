<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title","your title here")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #7952b3">
        <div class="container-fluid">
            <h4>Task Management System</h4>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <h4>{{auth()->user()->name}}</h4>
                <button class="btn btn-outline-success" type="submit"><a href="/logout">logut</a></button>
            </div>
        </div>
    </nav>
    @yield("staffcontent")
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</script>

</html>