<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\Role;
use App\Models\Teacher;
use App\Http\Requests\TeacherCreateRequest;
use App\Http\Requests\TeacherUpdateRequest;
use App\Http\Requests\TeacherIdRequest;
use File, Image;

class TeacherController extends Controller
{
  public function _new() {
    return view("ad.teachers.new");
  }

  public function _list() {
    return view("ad.teachers.list");
  }

  public function _listAll(Request $request) {
    $perpage = (int) $request->perpage;
    $perpage < 5 ? $perpage = 5 : $perpage;
    $perpage > 50 ? $perpage = 50 : $perpage;
    $partner = (int) $request->partner;

    $partners = User::where("group", "partner")->get();
    if($partner != null && User::find($partner))
      $teachers = Teacher::with("user")
          ->where('user_id', $partner)
          ->paginate($perpage);
    else
      $teachers = Teacher::with("user")->paginate($perpage);
    return view("ad.teachers.list_all", ["teachers" => $teachers, "partners" => $partners]);
  }

  public function create(TeacherCreateRequest $request) {
    $user = auth()->user();
    if($user->role->create_teacher) {
      $teacher = new Teacher;
      $teacher->user_id = $user->id;
      $teacher->name = $request->name;
      $teacher->email = $request->email;
      $teacher->facebook = $request->facebook;
      $teacher->phone = $request->phone;
      $teacher->description = $request->description;
      $teacher->content = $request->content;
      if($teacher->save()) {
        if($request->hasFile('avatar'))
        {
          $path = "img/avatar/";
          $avatar = $request->file('avatar');
          $avatarName = $user->id."_".$teacher->id.".".$avatar->getClientOriginalExtension();
          $avatar->move($path, $avatarName);
          Image::make(sprintf($path."%s", $avatarName))->resize(300, 300)->save();
          $teacher->avatar = $avatarName;
          $teacher->save();
        }
        if($user->role->view_all_teacher)
            return redirect("/admin/teachers/list-all")->with(["messages" => ["type" => "success", "content" => "Teachers created!"]]);
        else
            return redirect()->back()->with(["messages" => ["type" => "success", "content" => "Teachers created!"]]);
      } else
        return redirect()->back()->with(["messages" => ["type" => "warning", "content" => "Save fail!"]]);
    } else
      return redirect()->back()->with(["messages" => ["type" => "success", "content" => "Not auth!"]]);
  }

  public function edit(Request $request) {
    $id = (int) $request->id;
    if(Teacher::find($id)) {
      $teacher = Teacher::find($id);
      return view("ad.teachers.edit", ["teacher" => $teacher]);
    } else
    return redirect()->back()->with(["messages" => ["type" => "danger", "content" => "Not exits!"]]);
  }

  public function update(TeacherUpdateRequest $request) {

  }

  public function destroy(TeacherIdRequest $request) {

  }
}
