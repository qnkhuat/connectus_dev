<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\User;
use Auth;

class FrontController extends Controller
{
    public function mainPage() {
        $courses = Course::with("user")->where("deleted", false)->where("publish", true)->get();
        $partners = User::where("group", "partner")->where("deleted", false)->get();
        return view('front.main', ["courses" => $courses, "partners" => $partners]);
    }

    public function course(Request $request) {
        $course_id = (int) $request->id;
        $course = Course::where("id", $course_id)->where("deleted", false)->where("publish", true)->count() > 0 ? true : false;
        if($course) {
            $course = Course::find($course_id);
            $courses = Course::with("user")->where("deleted", false)->where("publish", true)->get();
            $videos = json_decode($course->video);
            $slides = json_decode($course->slide);
            $branches = $course->branchs;
            $isAuth = Auth::check() ? true : false;
            $user = [];
            $nickName = "";
            if($isAuth) {
                $user = auth()->user();
                $socialAccounts = $user->SocialAccounts()->first();
                $nickName = isset($socialAccounts->nick_name) ? $socialAccounts->nick_name : $user->name;
            }
            return view('front.single', ["courses" => $courses, "course" => $course,
                "videos" => $videos, "slides" => $slides, "branches" => $branches,
                "isAuth" => $isAuth, "user" => $user, "nickName" => $nickName
            ]);
        } else
            return redirect("/");
    }

    public function search() {
        $courses = Course::with("user")->where("deleted", false)->where("publish", true)->get();
        $partners = User::where("group", "partner")->where("deleted", false)->get();
        return view("front.search", ["courses" => $courses, "partners" => $partners]);
    }
}
