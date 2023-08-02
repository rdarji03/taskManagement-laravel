<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class forgotPassword extends Controller
{
    function resetPassword(Request $req){
        $req->validate([
            "email"=>"required|email|exists:users",
        ]);
        $token=Str::random(64);

        DB::table("password_reset_tokens")->insert(["email"=>$req->email,"token"=>$token,"created_at"=>Carbon::now()]);
        Mail::send("resetMail",["token"=>$token],function($message) use ($req){
            $message->to($req->email);
            $message->subject("reset password");
        });
        return redirect()->route("user.resetPassword",["token"=>$token])->with("success","Request Send Successfully");
    }
    function updatePassword(Request $req){
     $data=DB::table("password_reset_tokens")->where("email",$req->email)->where("token",$req->token)->get();
        if(!$data){
            return "invalid";
        }
        User::where("email",$req->email)->update(["password"=>Hash::make($req->password)]);
        DB::table("password_reset_tokens")->where("email",$req->email)->delete();
        return redirect()->route("login")->with("passwordUpdate","Password Update Sucessfully");

    }
}

