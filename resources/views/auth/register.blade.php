@extends("layouts.index")
@section("title","register")
@section("content")
<div class="container w-50">
    <form action="" method="post" class="ms-auto border border-1 border-success rounded p-2">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1">
           
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" name="uname" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="u_type" id="role" class="p-1 rounded">
                <option value="1">Admin</option>
                <option value="0">staff</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="btn">
            <button class="btn btn-primary" type="submit">Submit Detail</button>
        </div>

    </form>
</div>
@endsection