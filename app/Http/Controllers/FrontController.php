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
use App\Models\Xe;
use App\Http\Requests\BusinessCreateRequest;


class FrontController extends Controller
{
    // public function test() {
    //     $arIds= User::pluck("id");
    //
    //     $id=3;
    //     $user = User::where("id",1)->first();
    //     $bv = $user->courses;
    //
    //
    //     $categories = Course::with()
    //     // dd($bv);
    //     return view('front.landings.tn',["courses" => $bv]);
    // }

    public function kos(){
      $courseFollows = [];
      $totalCourseFollows = 0;
      $categories = CourseType::where("publish", true)->where("deleted", false)->get();
      $coursesWithCat = [];
      foreach($categories as $cat)
          array_push($coursesWithCat, [ "category" => $cat, "courses" => Course::with("user")->where("user_id",2)->where("course_type_id", $cat->id)->where("deleted", false)->where("publish", true)->orderBy("created_at", "desc")->get()]);
      if(auth()->user()) {
          $user = auth()->user();
          $courseFollowIds = $user->courseFollows()->pluck("course_id")->toArray();
          $courseFollows = Course::whereIn('id', $courseFollowIds)->with("user")->get();
          $totalCourseFollows = count($courseFollows);
      }
      return view('front.landings.kos', [
          "courseFollows" => $courseFollows, "totalCourseFollows" => $totalCourseFollows,"coursesWithCat" => $coursesWithCat,
      ]);

    }


    public function aten(){
      $courseFollows = [];
      $totalCourseFollows = 0;
      $categories = CourseType::where("publish", true)->where("deleted", false)->get();
      $coursesWithCat = [];
      foreach($categories as $cat)
          array_push($coursesWithCat, [ "category" => $cat, "courses" => Course::with("user")->where("user_id",2)->where("course_type_id", $cat->id)->where("deleted", false)->where("publish", true)->orderBy("created_at", "desc")->get()]);
      if(auth()->user()) {
          $user = auth()->user();
          $courseFollowIds = $user->courseFollows()->pluck("course_id")->toArray();
          $courseFollows = Course::whereIn('id', $courseFollowIds)->with("user")->get();
          $totalCourseFollows = count($courseFollows);
      }
      return view('front.landings.aten', [
          "courseFollows" => $courseFollows, "totalCourseFollows" => $totalCourseFollows,"coursesWithCat" => $coursesWithCat,
      ]);

    }

    public function jolo(){
      $courseFollows = [];
      $totalCourseFollows = 0;
      $categories = CourseType::where("publish", true)->where("deleted", false)->get();
      $coursesWithCat = [];
      foreach($categories as $cat)
          array_push($coursesWithCat, [ "category" => $cat, "courses" => Course::with("user")->where("user_id",38)->where("course_type_id", $cat->id)->where("deleted", false)->where("publish", true)->orderBy("created_at", "desc")->get()]);
      if(auth()->user()) {
          $user = auth()->user();
          $courseFollowIds = $user->courseFollows()->pluck("course_id")->toArray();
          $courseFollows = Course::whereIn('id', $courseFollowIds)->with("user")->get();
          $totalCourseFollows = count($courseFollows);
      }
      return view('front.landings.jolo', [
          "courseFollows" => $courseFollows, "totalCourseFollows" => $totalCourseFollows,"coursesWithCat" => $coursesWithCat,
      ]);

    }

    public function langmaster(){
      $courseFollows = [];
      $totalCourseFollows = 0;
      $categories = CourseType::where("publish", true)->where("deleted", false)->get();
      $coursesWithCat = [];
      foreach($categories as $cat)
          array_push($coursesWithCat, [ "category" => $cat, "courses" => Course::with("user")->where("user_id",41)->where("course_type_id", $cat->id)->where("deleted", false)->where("publish", true)->orderBy("created_at", "desc")->get()]);
      if(auth()->user()) {
          $user = auth()->user();
          $courseFollowIds = $user->courseFollows()->pluck("course_id")->toArray();
          $courseFollows = Course::whereIn('id', $courseFollowIds)->with("user")->get();
          $totalCourseFollows = count($courseFollows);
      }
      return view('front.landings.langmaster', [
          "courseFollows" => $courseFollows, "totalCourseFollows" => $totalCourseFollows,"coursesWithCat" => $coursesWithCat,
      ]);

    }


    public function jaxtina(){
      $courseFollows = [];
      $totalCourseFollows = 0;
      $categories = CourseType::where("publish", true)->where("deleted", false)->get();
      $coursesWithCat = [];
      foreach($categories as $cat)
          array_push($coursesWithCat, [ "category" => $cat, "courses" => Course::with("user")->where("user_id",36)->where("course_type_id", $cat->id)->where("deleted", false)->where("publish", true)->orderBy("created_at", "desc")->get()]);
      if(auth()->user()) {
          $user = auth()->user();
          $courseFollowIds = $user->courseFollows()->pluck("course_id")->toArray();
          $courseFollows = Course::whereIn('id', $courseFollowIds)->with("user")->get();
          $totalCourseFollows = count($courseFollows);
      }
      return view('front.landings.jaxtina', [
          "courseFollows" => $courseFollows, "totalCourseFollows" => $totalCourseFollows,"coursesWithCat" => $coursesWithCat,
      ]);

    }

    public function itd(){
      $courseFollows = [];
      $totalCourseFollows = 0;
      $categories = CourseType::where("publish", true)->where("deleted", false)->get();
      $coursesWithCat = [];
      foreach($categories as $cat)
          array_push($coursesWithCat, [ "category" => $cat, "courses" => Course::with("user")->where("user_id",39)->where("course_type_id", $cat->id)->where("deleted", false)->where("publish", true)->orderBy("created_at", "desc")->get()]);
      if(auth()->user()) {
          $user = auth()->user();
          $courseFollowIds = $user->courseFollows()->pluck("course_id")->toArray();
          $courseFollows = Course::whereIn('id', $courseFollowIds)->with("user")->get();
          $totalCourseFollows = count($courseFollows);
      }
      return view('front.landings.itd', [
          "courseFollows" => $courseFollows, "totalCourseFollows" => $totalCourseFollows,"coursesWithCat" => $coursesWithCat,
      ]);

    }



    public function tn(){
      $courseFollows = [];
      $totalCourseFollows = 0;
      $categories = CourseType::where("publish", true)->where("deleted", false)->get();
      $coursesWithCat = [];
      foreach($categories as $cat)
          array_push($coursesWithCat, [ "category" => $cat, "courses" => Course::with("user")->where("user_id",3)->where("course_type_id", $cat->id)->where("deleted", false)->where("publish", true)->orderBy("created_at", "desc")->get()]);
      if(auth()->user()) {
          $user = auth()->user();
          $courseFollowIds = $user->courseFollows()->pluck("course_id")->toArray();
          $courseFollows = Course::whereIn('id', $courseFollowIds)->with("user")->get();
          $totalCourseFollows = count($courseFollows);
      }
      return view('front.landings.tn', [
          "courseFollows" => $courseFollows, "totalCourseFollows" => $totalCourseFollows,"coursesWithCat" => $coursesWithCat,
      ]);

    }

    public function tiw(){
      $courseFollows = [];
      $totalCourseFollows = 0;
      $categories = CourseType::where("publish", true)->where("deleted", false)->get();
      $coursesWithCat = [];
      foreach($categories as $cat)
          array_push($coursesWithCat, [ "category" => $cat, "courses" => Course::with("user")->where("user_id",22)->where("course_type_id", $cat->id)->where("deleted", false)->where("publish", true)->orderBy("created_at", "desc")->get()]);
      if(auth()->user()) {
          $user = auth()->user();
          $courseFollowIds = $user->courseFollows()->pluck("course_id")->toArray();
          $courseFollows = Course::whereIn('id', $courseFollowIds)->with("user")->get();
          $totalCourseFollows = count($courseFollows);
      }
      return view('front.landings.tiw', [
          "courseFollows" => $courseFollows, "totalCourseFollows" => $totalCourseFollows,"coursesWithCat" => $coursesWithCat,
      ]);

    }

    public function mainPage(Request $request) {
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
            array_push($coursesWithCat, [

                "category" => $cat,
                "courses" => Course::with("user")
                    ->where("course_type_id", $cat->id)
                    ->where("deleted", false)
                    ->where("publish", true)
                    ->orderBy("created_at", "desc")
                    ->get()
            ]);
        $partners = User::where("group", "partner")->where("deleted", false)->get();



        #add search to main

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

        if($sSearch != ""){
            $courses = Course::with("user")
                ->where("deleted", false)
                ->where("publish", true)
                ->whereRaw($sSearch)
                ->paginate(12);
            return view("front.search", [
                "courses" => $courses, "partners" => $partners,
                "courseFollows" => $courseFollows, "totalCourseFollows" => $totalCourseFollows,
                "couseType" => $couseType, "districts" => $districts,
                "teacherTypes" => $teacherTypes, "learnTime" => $learnTime,
                "pCouseType" => $pCouseType, "pDistricts" => $pDistricts,
                "pTuition" => $pTuition, "pStudentPerClass" => $pStudentPerClass,
                "pTeacherType" => $pTeacherType, "pLearnTime" => $pLearnTime,
                "coursesWithCat" => $coursesWithCat
            ]);
        }else{
            $courses = Course::with("user")
                ->where("deleted", false)
                ->where("publish", true)
                ->paginate(12);

            return view("front.main", [
                "courses" => $courses, "partners" => $partners,
                "courseFollows" => $courseFollows, "totalCourseFollows" => $totalCourseFollows,
                "couseType" => $couseType, "districts" => $districts,
                "teacherTypes" => $teacherTypes, "learnTime" => $learnTime,
                "pCouseType" => $pCouseType, "pDistricts" => $pDistricts,
                "pTuition" => $pTuition, "pStudentPerClass" => $pStudentPerClass,
                "pTeacherType" => $pTeacherType, "pLearnTime" => $pLearnTime,
                "coursesWithCat" => $coursesWithCat
            ]);

        }
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
            if($pLearnTime!='both'){
                $sLearnTime = $pLearnTime != "" ? "time_in_date='" . $pLearnTime . "'" : "";

            }else{
                $sLearnTime = '';
            }
            // $sLearnTime = $pLearnTime != "" ? "time_in_date='" . $pLearnTime . "'" : "";
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


        $partners = User::where("group", "partner")->where("deleted", false)->get();
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

        return view("front.search", [
            "courses" => $courses, "partners" => $partners,
            "courseFollows" => $courseFollows,
            "totalCourseFollows" => $totalCourseFollows,
            "couseType" => $couseType,
            "districts" => $districts,
            "teacherTypes" => $teacherTypes,
            "learnTime" => $learnTime,
            "pCouseType" => $pCouseType,
            "pDistricts" => $pDistricts,
            "pTuition" => $pTuition,
            "pStudentPerClass" => $pStudentPerClass,
            "pTeacherType" => $pTeacherType,
            "pLearnTime" => $pLearnTime
        ]);
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
