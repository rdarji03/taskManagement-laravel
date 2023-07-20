@extends("layouts.index")
@section("title","register")
@section("content")

<div class="bg-[#e9ecef] w-full flex flex-col justify-center items-center min-h-[100vh]">
    <div class="head my-[1em]">
        <h1 class="text-3xl dark:text-white ">Register Here</h1>
    </div>
    <form method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-[25em]">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Name
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="username" type="text" placeholder="joe" name="uname">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Email
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="username" type="text" placeholder="joe@xyz.com" name="email">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input
                class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="password" type="password" placeholder="******************" name="password">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="role">
                Role
            </label>
            <select name="u_type" id="role" class="p-1 rounded w-[5rem]">
                <option value="1">Admin</option>
                <option value="0">staff</option>
            </select>
        </div>
        
        <div class="flex items-center justify-between">
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
               Submit
            </button>
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="/">
                Login
            </a>
        </div>
    </form>

</div>
@endsection