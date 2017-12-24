<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\User;

class FrontController extends Controller
{
    public function mainPage() {
        $courses = Course::with("user")->where("deleted", false)->where("publish", true)->get();
        $partners = User::where("group", "partner")->where("deleted", false)->get();
        return view('front.main', ["courses" => $courses, "partners" => $partners]);
    }
}
