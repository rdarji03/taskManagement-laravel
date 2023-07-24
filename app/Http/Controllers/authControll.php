<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class authControll extends Controller
{

    public function registerPost(Request $req)
    {
        $req->validate([
            "uname" => "required",
            "email" => "required|unique:users",
            "password" => "required",
        ]);

        $usertype = $req->u_type;
        $data["name"] = $req->uname;
        $data["email"] = $req->email;
        $data["u_type"] = (int) $usertype;
        $data["password"] = Hash::make($req->password);
        $user = User::create($data);
        if ($user) {
            return redirect("/");
        } else {
            return "fail";
        }

    }
    
    public function loginPost(Request $req)
    {
        $req->validate([
            "email" => "required",
            "password" => "required",
        ]);
        $credentials = $req->only("email", "password");
        if (Auth::attempt($credentials)) {
            if (auth()->user()->u_type==1) {
                return redirect()->route("admin.home");
            }
            else {
                return redirect()->route("staff.home");
            }
        } else {
            return redirect()->route("login")->with("error","Please check Credentials");
        }
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect("/");
    }
}
