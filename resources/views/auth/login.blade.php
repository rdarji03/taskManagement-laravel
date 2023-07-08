@extends("layouts.index")
@section("title","Login")
@section("content")
<div class="container w-50 ">
    <form action="" method="post" class="ms-auto border border-1 border-success rounded p-2">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="btn">
            <button class="btn btn-primary" type="submit">Login</button>
            <button class="btn btn-success" ><a href="/register" target="_blank" rel="noopener noreferrer" class="text-white text-decoration-none">Register</a></button>
        </div>
    
    </form>
</div>
@endsection