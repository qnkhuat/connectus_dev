<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FirstPassword;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function test() {
        Mail::send(["text" => "mail.test"], ["name" => "Tên Nè"], function($message){
            $message->from("khuatquangngocc983@gmail.com", "Connectus dev");
            $message->to("trung0194@gmail.com", "meo để tét nè")->subject("ahihi đồ ngốck đây là subject");
        });
    }

    public function ahi() {
        Mail::to("trung0194@gmail.com")->send(new FirstPassword);
        // return "hgdhgd";
    }
}
