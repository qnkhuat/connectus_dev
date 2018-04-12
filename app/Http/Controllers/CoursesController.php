<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\CourseType;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\TeachersOfCourse;
use App\Models\District;
use App\Http\Requests\CourseCreateRequest;
use App\Http\Requests\CourseUpdateRequest;
use App\Http\Requests\CourseIdRequest;
use Validator, File;

class CoursesController extends Controller
{
    public function _list(Request $request) {
      $user = auth()->user();
      $perpage = (int) $request->perpage;
      $perpage < 5 ? $perpage = 50 : $perpage;
      $perpage > 50 ? $perpage = 50 : $perpage;
      $teacherType = $request->teacherType;
      $name = $request->name;
      $publish = $request->publish;
      $teacherTypes = Teacher::$type;

      if($teacherType == null) {
        if($publish != null)
          $courses = Course::with("user")
            ->where("deleted", false)
            ->where("name", "like", "%$name%")
            ->where("publish", $publish)
            ->paginate($perpage);
        else
          $courses = Course::with("user")
            ->where("deleted", false)
            ->where("name", "like", "%$name%")
            ->paginate($perpage);
      } else {
        if($publish != null)
          $courses = Course::with("user")
            ->where("deleted", false)
            ->where("name", "like", "%$name%")
            ->where("publish", $publish)
            ->where("teacher_type", $teacherType)
            ->paginate($perpage);
        else
          $courses = Course::with("user")
            ->where("deleted", false)
            ->where("name", "like", "%$name%")
            ->where("teacher_type", $teacherType)
            ->paginate($perpage);
      }
      return view("ad.courses.list", ["courses" => $courses, "teacherTypes" => $teacherTypes]);
    }

    public function _listAll(Request $request) {
      $perpage = (int) $request->perpage;
      $perpage < 5 ? $perpage = 50 : $perpage;
      $perpage > 50 ? $perpage = 50 : $perpage;
      $name = $request->name;
      $teacherType = $request->teacherType;
      $partner = (int) $request->partner;
      $publish = $request->publish;
      $teacherTypes = Teacher::$type;

      $partners = User::where("group", "partner")->get();
      if($teacherType == null) {
        if($partner != null && $publish != null)
          $courses = Course::with("user")
            ->where("deleted", false)
            ->where("name", "like", "%$name%")
            ->where("user_id", $partner)
            ->where("publish", $publish)
            ->paginate($perpage);
        else if($partner != null)
          $courses = Course::with("user")
            ->where("deleted", false)
            ->where("name", "like", "%$name%")
            ->where("user_id", $partner)
            ->paginate($perpage);
        else if($publish != null)
          $courses = Course::with("user")
            ->where("deleted", false)
            ->where("name", "like", "%$name%")
            ->where("publish", $publish)
            ->paginate($perpage);
        else
          $courses = Course::with("user")
            ->where("deleted", false)
            ->where("name", "like", "%$name%")
            ->paginate($perpage);
      } else {
        if($partner != null && $publish != null)
          $courses = Course::with("user")
            ->where("deleted", false)
            ->where("name", "like", "%$name%")
            ->where("user_id", $partner)
            ->where("publish", $publish)
            ->where("teacher_type", $teacherType)
            ->paginate($perpage);
        else if($partner != null)
          $courses = Course::with("user")
            ->where("deleted", false)
            ->where("name", "like", "%$name%")
            ->where("user_id", $partner)
            ->where("teacher_type", $teacherType)
            ->paginate($perpage);
        else if($publish != null)
          $courses = Course::with("user")
            ->where("deleted", false)
            ->where("name", "like", "%$name%")
            ->where("publish", $publish)
            ->where("teacher_type", $teacherType)
            ->paginate($perpage);
        else
          $courses = Course::with("user")
            ->where("deleted", false)
            ->where("name", "like", "%$name%")
            ->where("teacher_type", $teacherType)
            ->paginate($perpage);
      }

      return view("ad.courses.list_all", ["courses" => $courses, "partners" => $partners, "teacherTypes" => $teacherTypes]);
    }

    public function _new() {
      $user = auth()->user();
      $districts = District::orderBy("name")->where("deleted", false)->get();
      $learnTime = Course::$learnTime;
      $teacherTypes = Teacher::$type;
      $types = CourseType::where("deleted", false)->where("publish", true)->orderBy("updated_at", "desc")->get();
      $teachers = $user->teachers()->where("deleted", false)->get();
      return view("ad.courses.new", ["types" => $types, "teachers" => $teachers, "teacherTypes" => $teacherTypes, "learnTime" => $learnTime, "districts" => $districts]);
    }

    public function create(CourseCreateRequest $request) {
      $user = auth()->user();
      $course = new Course;
      $course->user_id = $user->id;
      $course->course_type_id = $request->course_type_id;
      $course->name = $request->name;
      $course->old_price = $request->old_price;
      $course->new_price = $request->new_price;
      $course->new_price_only = $request->new_price_only;
      $course->sale = $request->sale;
      $course->gift = $request->gift;
      $course->teacher_type = $request->teacher_type;
      $course->opening = $request->opening;
      $course->current_student_total = $request->current_student_total;
      $course->student_total = $request->student_total;
      $course->lesson_total = $request->lesson_total;
      $course->hour_total = $request->hour_total;
      $course->session_total = $request->session_total;
      $course->time_in_date = $request->time_in_date;
      $course->time_from = $request->time_from;
      $course->time_to = $request->time_to;
      $course->day_in_week = $request->day_in_week;
      $course->description = $request->description;
      $course->content = $request->content;
      $course->publish = $request->publish;

      $course->session_per_week = $request->session_per_week;
      $course->districts_array_id = json_encode($request->districts_array_id, JSON_UNESCAPED_UNICODE);
      $course->districts_text = "";
      $arrDistrictsText = District::whereIn('id', $request->districts_array_id)->pluck("key")->toArray();
      foreach($arrDistrictsText as $text)
        $course->districts_text .= " " . $text;
      $course->save();

      $teachers = $request->teachers;
      if(is_array($teachers)) {
        foreach($teachers as $teacher) {
          $t = new TeachersOfCourse;
          $t->course_id = $course->id;
          $t->teacher_id = $teacher;
          $t->save();
        }
      }

      $avatar = $request->file("avatar");
      $path = "img/courses/";
      $avatarName = $user->id."_".$course->id.".".$avatar->getClientOriginalExtension();
      $avatar->move($path, $avatarName);
      $course->avatar = $avatarName;
      $slideVideos = [];
      $videos = $request->slideVideoLinks;
      if(is_array($videos)) {
        foreach($videos as $video)
          if(strlen(trim($video, " ")) > 0) {
            $newLink = trim($video, " ");
            $pos = strpos($newLink, "?v=");
            if($pos > 0) {
              $newLink = substr($newLink, $pos + 3, strlen($newLink));
              $newLink = "https://www.youtube.com/embed/" . $newLink;
            }
            array_push($slideVideos, $newLink);
          }
      }

      $slide = [];
      $images = $request->file("slideImageUploads");
      foreach($images as $img) {
        $rules = array('file' => 'required|image');
        $validator = Validator::make(array('file'=> $img), $rules);
        if($validator->passes()){
          $imgName = $user->id."_".$course->id."_".str_random(32).".".$img->getClientOriginalExtension();
          $img->move($path, $imgName);
          array_push($slide, $imgName);
        }
      }
      $course->video = json_encode($slideVideos, JSON_UNESCAPED_UNICODE);
      $course->slide = json_encode($slide, JSON_UNESCAPED_UNICODE);
      $course->save();

      return redirect("/hi/courses")->with(["messages" => ["type" => "success", "content" => "Course created!"]]);
    }

    public function edit(Request $request) {
      $user = auth()->user();
      $isExits = Course::find($request->id);
      if($isExits) {
        if($user->role->update_all_course || $user->courses()->find($request->id)) {
          $districts = District::orderBy("name")->where("deleted", false)->get();
          $learnTime = Course::$learnTime;
          $teacherTypes = Teacher::$type;
          $course = Course::find($request->id);
          $types = CourseType::where("deleted", false)->where("publish", true)->orderBy("updated_at", "desc")->get();
          $courseOfUser = $course->user;
          $teachers = $courseOfUser->teachers()->where("deleted", false)->get();
          $teachersChecked = $course->teachersChecked();
          $videos = json_decode($course->video);
          $districtsChoosen = json_decode($course->districts_array_id);
          return view("ad.courses.edit", ["course" => $course, "types" => $types, "teachers" => $teachers, "teachersChecked" => $teachersChecked, "videos" => $videos,
            "learnTime" => $learnTime, "teacherTypes" => $teacherTypes, "districts" => $districts, "districtsChoosen" => $districtsChoosen]);
        } else {
          return redirect("/hi")->with(["messages" => ["type" => "danger", "content" => "Not auth!"]]);
        }
      } else
      return redirect("/hi")->with(["messages" => ["type" => "danger", "content" => "Not auth!"]]);
    }

    public function update(CourseUpdateRequest $request) {
      $user = auth()->user();
      $isAuth = $user->courses->find($request->id);
      if($user->role->update_all_course || $isAuth) {
        $course = Course::find($request->id);
        $course->course_type_id = $request->course_type_id;
        $course->name = $request->name;
        $course->old_price = $request->old_price;
        $course->new_price = $request->new_price;
        $course->new_price_only = $request->new_price_only;
        $course->sale = $request->sale;
        $course->gift = $request->gift;
        $course->opening = $request->opening;
        $course->current_student_total = $request->current_student_total;
        $course->student_total = $request->student_total;
        $course->lesson_total = $request->lesson_total;
        $course->hour_total = $request->hour_total;
        $course->session_total = $request->session_total;
        $course->time_in_date = $request->time_in_date;
        $course->time_from = $request->time_from;
        $course->time_to = $request->time_to;
        $course->day_in_week = $request->day_in_week;
        $course->description = $request->description;
        $course->content = $request->content;
        $course->publish = $request->publish;

        $course->session_per_week = $request->session_per_week;
        $course->districts_array_id = json_encode($request->districts_array_id, JSON_UNESCAPED_UNICODE);
        $course->districts_text = "";
        $arrDistrictsText = District::whereIn('id', $request->districts_array_id)->pluck("key")->toArray();
        foreach($arrDistrictsText as $text)
          $course->districts_text .= " " . $text;

        $teachers = $request->teachers;
        if(is_array($teachers)) {
          TeachersOfCourse::where("course_id", $course->id)->delete();
          foreach($teachers as $teacher) {
            $t = new TeachersOfCourse;
            $t->course_id = $course->id;
            $t->teacher_id = $teacher;
            $t->save();
          }
        }

        $path = "img/courses/";
        if($request->hasFile("avatar")) {
          if(File::exists($path.$course->avatar))
            File::delete($path.$course->avatar);
          $avatar = $request->file("avatar");
          $avatarName = $user->id."_".$course->id.".".$avatar->getClientOriginalExtension();
          $avatar->move($path, $avatarName);
          $course->avatar = $avatarName;
        }

        $slideVideos = [];
        $videos = $request->slideVideoLinks;
        if(is_array($videos)) {
          foreach($videos as $video)
            if(strlen(trim($video, " ")) > 0) {
              $newLink = trim($video, " ");
              $pos = strpos($newLink, "?v=");
              if($pos > 0) {
                $newLink = substr($newLink, $pos + 3, strlen($newLink));
                $newLink = "https://www.youtube.com/embed/" . $newLink;
              }
              array_push($slideVideos, $newLink);
            }
        }
        $course->video = json_encode($slideVideos, JSON_UNESCAPED_UNICODE);

        $slide = [];
        if($request->hasFile("slideImageUploads")) {
          // delete old image
          $oldImages = json_decode($course->slide);
          foreach($oldImages as $oldImg) {
            if(File::exists($path.$oldImg))
              File::delete($path.$oldImg);
          }
          // .delete old image
          $images = $request->file("slideImageUploads");
          foreach($images as $img) {
            $rules = array('file' => 'required|image');
            $validator = Validator::make(array('file'=> $img), $rules);
            if($validator->passes()){
              $imgName = $user->id."_".$course->id."_".str_random(32).".".$img->getClientOriginalExtension();
              $img->move($path, $imgName);
              array_push($slide, $imgName);
            }
          }
          $course->slide = json_encode($slide, JSON_UNESCAPED_UNICODE);
        }
        if($course->save())
          return redirect("/hi/courses")->with(["messages" => ["type" => "success", "content" => "Course was updated!"]]);
        else
          return redirect()->back()->with(["messages" => ["type" => "danger", "content" => "Save fail!"]]);
      } else
      return redirect()->back()->with(["messages" => ["type" => "danger", "content" => "Not Auth!"]]);
    }

    public function destroy(CourseIdRequest $request) {
      $user = auth()->user();
      $isAuth = $user->courses->find($request->id);
      if($user->role->destroy_all_course || $isAuth) {
        $course = Course::find($request->id);
        $course->deleted = true;
        $course->save();
      } else
        return redirect()->back()->with(["messages" => ["type" => "danger", "content" => "Not Auth!"]]);
    }
}
