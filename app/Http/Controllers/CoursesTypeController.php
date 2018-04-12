<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\CourseType;
use App\Http\Requests\CourseTypeCreateRequest;
use App\Http\Requests\CourseTypeUpdateRequest;
use App\Http\Requests\CourseTypeIdRequest;

class CoursesTypeController extends Controller
{
    public function _list(Request $request) {
      $perpage = (int) $request->perpage;
      $perpage < 5 ? $perpage = 50 : $perpage;
      $perpage > 50 ? $perpage = 50 : $perpage;
      $publish = $request->publish;
      $name = $request->name;

      if($publish != null)
        $types = CourseType::with('user')
        ->where('deleted', false)
        ->where('name',"LIKE" , "%$name%")
        ->where('publish', $publish)
        ->paginate($perpage);
      else
        $types = CourseType::with('user')
          ->where('deleted', false)
          ->where('name',"LIKE" , "%$name%")
          ->paginate($perpage);
      return view("ad.course_types.list", ["types" => $types]);
    }

    public function _new() {
      return view("ad.course_types.new");
    }

    public function create(CourseTypeCreateRequest $request) {
      $user = auth()->user();
      $type = new CourseType;
      $type->user_id = $user->id;
      $type->name = $request->name;
      $slug = str_slug($type->name, '-');
      $isExits = CourseType::where("slug", $slug)->count() > 0;
      if($isExits)
        return redirect("/hi/course-types/create")->with(["messages" => ["type" => "danger", "content" => "Course type is exits!"]]);
      else {
        $type->publish = $request->publish;
        $type->slug = $slug;
        $slugLengthValid = strlen($slug) <= 191;
        if($slugLengthValid) {
          if($type->save())
            return redirect("/hi/course-types")->with(["messages" => ["type" => "success", "content" => "Course type created!"]]);
          else
            return redirect("/hi/course-types/create")->with(["messages" => ["type" => "danger", "content" => "Save fail!"]]);
        } else
            return redirect("/hi/course-types/create")->with(["messages" => ["type" => "danger", "content" => "Course type max length is 191 char!"]]);
      }
    }

    public function edit(Request $request) {
      $user = auth()->user();
      $isAuth = $user->courseTypes->find($request->id);
      if($user->role->update_all_teacher || $isAuth) {
        $type = CourseType::find($request->id);
        if($type)
          return view("ad.course_types.edit", ["type" => $type]);
        else
          return redirect()->back();
      } else
      return redirect()->back()->with(["messages" => ["type" => "danger", "content" => "Not Auth!"]]);
    }

    public function update(CourseTypeUpdateRequest $request) {
      $user = auth()->user();
      $isAuth = $user->courseTypes->find($request->id);
      if($user->role->update_all_teacher || $isAuth) {
        $type = CourseType::find($request->id);
        $type->user_id = $user->id;
        $type->name = $request->name;
        $slug = str_slug($type->name, '-');
        $isExits = CourseType::where("slug", $slug)->where("id", "<>", $request->id)->count() > 0;
        if($isExits)
          return redirect()->back()->with(["messages" => ["type" => "danger", "content" => "Course type is exits!"]]);
        else {
          $type->slug = $slug;
          $type->publish = $request->publish;
          $slugLengthValid = strlen($slug) <= 191;
          if($slugLengthValid) {
            if($type->save())
              return redirect("/hi/course-types")->with(["messages" => ["type" => "success", "content" => "course type updated!"]]);
            else
              return redirect()->back()->with(["messages" => ["type" => "danger", "content" => "Save fail!"]]);
          } else
              return redirect("/hi/course-types/create")->with(["messages" => ["type" => "danger", "content" => "Course type max length is 191 char!"]]);
        }
      } else
      return redirect()->back()->with(["messages" => ["type" => "danger", "content" => "Not Auth!"]]);
    }

    public function destroy(CourseTypeIdRequest $request) {
      $user = auth()->user();
      $isAuth = $user->courseTypes->find($request->id);
      if($user->role->update_all_teacher || $isAuth) {
        $type = CourseType::find($request->id);
        $type->deleted = true;
        $type->save();
        return redirect("/hi/course-types")->with(["messages" => ["type" => "success", "content" => "Course type deleted!"]]);
      }
    }
}
