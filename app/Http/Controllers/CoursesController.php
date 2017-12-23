<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\CourseType;
use App\Models\Course;
use App\Models\Teacher;
use App\Http\Requests\CourseCreateRequest;
use App\Http\Requests\CourseUpdateRequest;
use App\Http\Requests\CourseIdRequest;
use Validator;

class CoursesController extends Controller
{
    public function _list() {
      return view("ad.courses.list");
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
      $course->time = $request->time_from . " - " . $request->time_to;
      $course->day_in_week = $request->day_in_week;
      $course->description = $request->description;
      $course->content = $request->content;
      $course->publish = $request->publish;
      $course->save();

      $avatar = $request->file("avatar");
      $path = "img/courses/";
      $avatarName = $user->id."_".$course->id.".".$avatar->getClientOriginalExtension();
      $avatar->move($path, $avatarName);
      $course->avatar = $avatarName;

      $videos = $request->slideVideoLinks;
      $slide = [];
      foreach($videos as $video)
        if(strlen(trim($video, " ")) > 0)
          array_push($slide, trim($video, " "));
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
      $course->save();

      return redirect("/admin/courses")->with(["messages" => ["type" => "success", "content" => "Course created!"]]);
    }

    public function edit() {
      return view("ad.courses.edit");
    }

    public function update() {

    }

    public function destroy() {

    }
}
