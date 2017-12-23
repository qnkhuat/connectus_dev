<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\CourseType;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\TeachersOfCourse;
use App\Http\Requests\CourseCreateRequest;
use App\Http\Requests\CourseUpdateRequest;
use App\Http\Requests\CourseIdRequest;
use Validator, File;

class CoursesController extends Controller
{
    public function _list(Request $request) {
      $user = auth()->user();
      $perpage = (int) $request->perpage;
      $perpage < 5 ? $perpage = 5 : $perpage;
      $perpage > 50 ? $perpage = 50 : $perpage;
      $name = $request->name;
      $publish = $request->publish;

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

      return view("ad.courses.list", ["courses" => $courses]);
    }

    public function _listAll(Request $request) {
      $perpage = (int) $request->perpage;
      $perpage < 5 ? $perpage = 5 : $perpage;
      $perpage > 50 ? $perpage = 50 : $perpage;
      $name = $request->name;
      $partner = (int) $request->partner;
      $publish = $request->publish;

      $partners = User::where("group", "partner")->get();

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
      return view("ad.courses.list_all", ["courses" => $courses, "partners" => $partners]);
    }

    public function _new() {
      $user = auth()->user();
      $types = CourseType::where("deleted", false)->orderBy("updated_at", "desc")->get();
      $teachers = $user->teachers()->where("deleted", false)->get();
      return view("ad.courses.new", ["types" => $types, "teachers" => $teachers]);
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
      $course->opening = $request->opening;
      $course->current_student_total = $request->current_student_total;
      $course->student_total = $request->student_total;
      $course->lesson_total = $request->lesson_total;
      $course->hour_total = $request->hour_total;
      $course->session_total = $request->session_total;
      $course->time_from = $request->time_from;
      $course->time_to = $request->time_to;
      $course->day_in_week = $request->day_in_week;
      $course->description = $request->description;
      $course->content = $request->content;
      $course->publish = $request->publish;
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
          if(strlen(trim($video, " ")) > 0)
            array_push($slideVideos, trim($video, " "));
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

      return redirect("/admin/courses")->with(["messages" => ["type" => "success", "content" => "Course created!"]]);
    }

    public function edit(Request $request) {
      $user = auth()->user();
      $isExits = Course::find($request->id);
      if($isExits) {
        if($user->role->update_all_course || $user->courses()->find($request->id)) {
          $course = Course::find($request->id);
          $types = CourseType::where("deleted", false)->orderBy("updated_at", "desc")->get();
          $courseOfUser = $course->user;
          $teachers = $courseOfUser->teachers()->where("deleted", false)->get();
          $teachersChecked = $course->teachersChecked();
          $videos = json_decode($course->video);
          return view("ad.courses.edit", ["course" => $course, "types" => $types, "teachers" => $teachers, "teachersChecked" => $teachersChecked, "videos" => $videos]);
        } else {
          return redirect("/admin")->with(["messages" => ["type" => "danger", "content" => "Not auth!"]]);
        }
      } else
      return redirect("/admin")->with(["messages" => ["type" => "danger", "content" => "Not auth!"]]);     
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
        $course->time_from = $request->time_from;
        $course->time_to = $request->time_to;
        $course->day_in_week = $request->day_in_week;
        $course->description = $request->description;
        $course->content = $request->content;
        $course->publish = $request->publish;

        $teachers = $request->teachers;
        if(is_array($teachers)) {
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
            if(strlen(trim($video, " ")) > 0)
              array_push($slideVideos, trim($video, " "));
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
          return redirect("/admin/courses")->with(["messages" => ["type" => "success", "content" => "Course was updated!"]]);
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
