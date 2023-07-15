<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userControll extends Controller
{
    public function showUser(){
        $userTable=new User();
        $userdata=$userTable->get(["id","name","u_type","email"]);
        return view("dashboard.admin.userlist",["userData"=>$userdata]);
    }
    public function deletUser($ID){
        user::where('id', $ID)->delete();
        return redirect()->route("admim.user");
    }
}
