<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\User;
use Auth, Session;
use App\Models\CourseFollow;
use App\Models\CourseType;
use App\Models\District;
use App\Models\Teacher;
use App\Models\Business;
use App\Http\Requests\BusinessCreateRequest;

class FrontController extends Controller
{
    public function mainPage() {
        $courseFollows = [];
        $totalCourseFollows = 0;
        if(auth()->user()) {
            $user = auth()->user();
            $courseFollowIds = $user->courseFollows()->pluck("course_id")->toArray();
            $courseFollows = Course::whereIn('id', $courseFollowIds)->with("user")->get();
            $totalCourseFollows = count($courseFollows);
        }
        $categories = CourseType::where("publish", true)->where("deleted", false)->get();
        $coursesWithCat = [];
        foreach($categories as $cat)
            array_push($coursesWithCat, [ "category" => $cat, "courses" => Course::with("user")->where("course_type_id", $cat->id)->where("deleted", false)->where("publish", true)->orderBy("created_at", "desc")->get()]);
        $partners = User::where("group", "partner")->where("deleted", false)->get();
        return view('front.main', ["coursesWithCat" => $coursesWithCat, "partners" => $partners, "courseFollows" => $courseFollows, "totalCourseFollows" => $totalCourseFollows]);
    }

    public function course(Request $request) {
        $courseFollows = [];
        $totalCourseFollows = 0;
        if(auth()->user()) {
            $user = auth()->user();
            $courseFollowIds = $user->courseFollows()->pluck("course_id")->toArray();
            $courseFollows = Course::whereIn('id', $courseFollowIds)->with("user")->get();
            $totalCourseFollows = count($courseFollows);
        }
        $categories = CourseType::where("publish", true)->where("deleted", false)->get();
        $coursesWithCat = [];
        foreach($categories as $cat)
            array_push($coursesWithCat, [ "category" => $cat, "courses" => Course::with("user")->where("course_type_id", $cat->id)->where("deleted", false)->where("publish", true)->orderBy("created_at", "desc")->get()]);
        $course_id = (int) $request->id;
        $course = Course::where("id", $course_id)->where("deleted", false)->where("publish", true)->count() > 0 ? true : false;
        if($course) {
            $course = Course::find($course_id);
            $courses = Course::with("user")->where("deleted", false)->where("publish", true)->orderBy("created_at", "desc")->paginate(12);
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
            return view('front.single', ["coursesWithCat" => $coursesWithCat,"courses" => $courses, "course" => $course,
                "videos" => $videos, "slides" => $slides, "branches" => $branches,
                "isAuth" => $isAuth, "user" => $user, "nickName" => $nickName,
                "courseFollows" => $courseFollows, "totalCourseFollows" => $totalCourseFollows
            ]);
        } else
            return redirect("/");
    }

    public function search(Request $request) {
        $courseFollows = [];
        $totalCourseFollows = 0;
        if(auth()->user()) {
            $user = auth()->user();
            $courseFollowIds = $user->courseFollows()->pluck("course_id")->toArray();
            $courseFollows = Course::whereIn('id', $courseFollowIds)->with("user")->get();
            $totalCourseFollows = count($courseFollows);
        }
        $couseType = CourseType::where("deleted", false)->get();
        $districts = District::where("deleted", false)->get();
        $teacherTypes = Teacher::$type;
        $learnTime = Course::$learnTime;

        // get params
        $pCouseType = $request->courseTypes ? $request->courseTypes : [];
        $pDistricts = $request->districts ? $request->districts : [];
        $pTuition = $request->tuition;
        $pStudentPerClass = $request->student_per_class;
        $pTeacherType = $request->teacher_type;
        $pLearnTime = $request->time;

        // handle raw sql
            $sCouseType = "";
            foreach($pCouseType as $type)
                $sCouseType .= "course_type_id=$type or ";
            $sCouseType = substr($sCouseType, 0, strlen($sCouseType) - 4);
            $sCouseType = "(" . $sCouseType . ")";
            $sCouseType = count($pCouseType) > 0 ? $sCouseType : "";

            $sDistricts = "";
            foreach($pDistricts as $district)
                $sDistricts .= "districts_text like '%$district%' or ";
            $sDistricts = substr($sDistricts, 0, strlen($sDistricts) - 4);
            $sDistricts = "(" . $sDistricts . ")";
            $sDistricts = count($pDistricts) > 0 ? $sDistricts : "";

            $sTuition = "";
            if(strlen($pTuition) > 2) {
                $sTuitionLength = strlen($pTuition);
                $priceStart = (float) substr($pTuition, 0, strpos($pTuition, "-"));
                $priceEnd = (float) substr($pTuition, strpos($pTuition, "-") + 1, $sTuitionLength);
                $sTuition = "new_price >= $priceStart and new_price <= $priceEnd ";
            }

            $sStudent_per_class = "";
            if(strlen($pStudentPerClass) > 2) {
                $sStudent_per_class_length = strlen($pStudentPerClass);
                $studentNumStart = (float) substr($pStudentPerClass, 0, strpos($pStudentPerClass, "-"));
                $studentNumEnd = (float) substr($pStudentPerClass, strpos($pStudentPerClass, "-") + 1, $sStudent_per_class_length);
                $sStudent_per_class = "student_total >= $studentNumStart and student_total <= $studentNumEnd ";
            }

            $sTeacher = $pTeacherType != "" ? "teacher_type='" . $pTeacherType ."' " : "";
            $sLearnTime = $pLearnTime != "" ? "time_in_date='" . $pLearnTime . "'" : "";
            $sSearch = $sCouseType . " and " . $sDistricts . " and " .
                $sTuition . " and " . $sStudent_per_class . " and " .
                $sTeacher . " and " . $sLearnTime;
            $sSearch = trim($sSearch);
            $sSearch = str_replace("  ", " ", $sSearch);
            $sSearch = trim($sSearch);
            $sSearch = str_replace("and and", "and", $sSearch);
            $sSearch = str_replace("and and", "and", $sSearch);
            $sSearch = str_replace("and and", "and", $sSearch);
            $sSearch = str_replace("and and", "and", $sSearch);
            $sSearch = str_replace("and and", "and", $sSearch);
            $sSearch = trim($sSearch);
            $findAndFirst = strpos($sSearch, "and");
            if($findAndFirst === 0)
                $sSearch = substr($sSearch, 4, strlen($sSearch) - 4);
            $sSearch = trim($sSearch);
            if(substr($sSearch, strlen($sSearch) - 3, strlen($sSearch)) == "and")
                $sSearch = substr($sSearch, 0, strlen($sSearch) - 4);
            $sSearch = trim($sSearch);
        // .handle raw sql
        if($sSearch != "")
            $courses = Course::with("user")
                ->where("deleted", false)
                ->where("publish", true)
                ->whereRaw($sSearch)
                ->paginate(12);
        else
            $courses = Course::with("user")
                ->where("deleted", false)
                ->where("publish", true)
                ->paginate(12);
        $partners = User::where("group", "partner")->where("deleted", false)->get();
        return view("front.search", [
            "courses" => $courses, "partners" => $partners,
            "courseFollows" => $courseFollows, "totalCourseFollows" => $totalCourseFollows,
            "couseType" => $couseType, "districts" => $districts,
            "teacherTypes" => $teacherTypes, "learnTime" => $learnTime,
            "pCouseType" => $pCouseType, "pDistricts" => $pDistricts,
            "pTuition" => $pTuition, "pStudentPerClass" => $pStudentPerClass,
            "pTeacherType" => $pTeacherType, "pLearnTime" => $pLearnTime
        ]);
    }

    public function psearch(Request $request) {
        dd($request->all());
    }

    public function business() {
        $courseFollows = [];
        $totalCourseFollows = 0;
        if(auth()->user()) {
            $user = auth()->user();
            $courseFollowIds = $user->courseFollows()->pluck("course_id")->toArray();
            $courseFollows = Course::whereIn('id', $courseFollowIds)->with("user")->get();
            $totalCourseFollows = count($courseFollows);
        }
        return view('front.partner_signin', [
            "courseFollows" => $courseFollows, "totalCourseFollows" => $totalCourseFollows,
        ]);
    }

    public function postBusiness(BusinessCreateRequest $request) {
        $business = new Business;
        $business->name = $request->name;
        $business->email = $request->email;
        $business->phone = $request->phone;
        $business->representative = $request->representative;
        $business->message = $request->message;
        if($business->save())
            return redirect()->back()->with(["messages" => ["type" => "success", "content" => "Successfully!"]]);
        else
        return redirect()->back()->with(["messages" => ["type" => "danger", "content" => "Fail!"]]);
    }
}
