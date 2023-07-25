<?php

namespace App\Http\Controllers;

use App\Mail\sendMail;
use App\Mail\staffMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function postMail(Request $req){
        $data=[
        $userEmail=$req->userEmail,
        $subject=$req->subject,
        $message=$req->mailMessage,
        ];
        Mail::to('rahuldarji227@gmail.com')->send(new sendMail($req));
        return redirect()->route("staff.email")->with("success","mail sent");
    }
}
