<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Laravel\Scout\Searchable;
use App\User;
use App\Models\Role;
use App\Models\Address;
use File, Image, Hash;

use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\UserIdRequest;
use App\Http\Requests\UserPasswordChangingRequest;

class UserController extends Controller
{
    // use Searchable;
    public function _list(Request $request) {
      $perpage = (int) $request->perpage;
      $perpage < 5 ? $perpage = 50 : $perpage;
      $perpage > 50 ? $perpage = 50 : $perpage;
      $group = $request->group;
      $gender = $request->gender;
      $email = $request->email;
      $phone = $request->phone;

      if($group != "" && $gender != "")
        $users = User::with('role')
          ->where('deleted', false)
          ->where('group', $group)
          ->where('gender', $gender)
          ->where('email',"LIKE" , "%$email%")
          ->where('phone',"LIKE" , "%$phone%")
          // ->searchable()
          ->paginate($perpage);
      else if($group != "")
        $users = User::with('role')
          ->where('deleted', false)
          ->where('group', $group)
          ->where('email',"LIKE" , "%$email%")
          ->where('phone',"LIKE" , "%$phone%")
          ->paginate($perpage);
      else if($gender != "")
        $users = User::with('role')
          ->where('deleted', false)
          ->where('gender', $gender)
          ->where('email',"LIKE" , "%$email%")
          ->where('phone',"LIKE" , "%$phone%")
          ->paginate($perpage);
      else
        $users = User::with('role')
          ->where('deleted', false)
          ->where('email',"LIKE" , "%$email%")
          ->where('phone',"LIKE" , "%$phone%")
          ->paginate($perpage);
      return view("ad.user.list", ["users" => $users]);
    }

    public function _new() {
      $userTypes = User::$types;
      $roles = Role::$list;
      $genders = User::$genders;
      $defaultGroupRole = Role::$defaultGroupRole;
      return view("ad.user.create", ['userTypes' => $userTypes, 'roles' => $roles, 'genders' => $genders,
          'defaultGroupRole' => $defaultGroupRole
        ]);
    }

    public function create(UserRequest $request) {
      $user = new User;
      $user->name = $request->name;
      $user->email =  $request->email;
      $password = str_random(16);
      $user->password = Hash::make($password);
      $user->website = $request->website;
      $user->phone = $request->phone;
      $user->gender = $request->gender;
      $user->group = $request->group;
      $user->birth = $request->birth;
      $user->description = $request->description;
      $user->fb_page = $request->fb_page;

      if($user->save())
      {
        Role::setRole($user->id, $request->roles);
        if($request->hasFile('avatar'))
        {
          $path = "img/avatar/";
          $avatar = $request->file('avatar');
          $avatarName = $user->id.".".$avatar->getClientOriginalExtension();
          $avatar->move($path, $avatarName);
          Image::make(sprintf($path."%s", $avatarName))->resize(300, 300)->save();
          $user->avatar = $avatarName;
          $user->save();
        }
        return redirect("/admin/users")->with(["messages" => ["type" => "success", "content" => "Đã tạo thành công tài khoản: $user->email ($user->name), với mật khẩu: $password, lưu ý: mật khẩu chỉ cấp 1 lần duy nhất, hãy đổi mật khẩu ngay lần đăng nhập đầu tiên!"]]);
      } else
        return redirect("/admin/users/create")->with(["result" => "save fail"]);
    }

    public function edit($id) {
      $user = User::find($id);
      if($user) {
        $userRole = $user->role()->first()->toArray();
        $userRoleJSON = json_encode($user->role(), JSON_UNESCAPED_UNICODE);
        $userTypes = User::$types;
        $roles = Role::$list;
        $rolesJSON = json_encode(Role::$list, JSON_UNESCAPED_UNICODE);
        $genders = User::$genders;
        $defaultGroupRole = Role::$defaultGroupRole;
        $address = json_decode($user->address);
        return view("ad.user.edit", ["user" => $user, "userRole" => $userRole, 'userTypes' => $userTypes,
          'roles' => $roles, 'genders' => $genders, 'defaultGroupRole' => $defaultGroupRole, 'rolesJSON' => $rolesJSON,
          'userRoleJSON' => $userRoleJSON, "address" => $address
        ]);
      } else {
        return redirect()->back();
      }
    }

    public function update(UserUpdateRequest $request) {
      $id = (int) $request->id;
      $user = User::find($id);
      if($user) {
        $user->name = $request->name;
        $user->website = $request->website;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->group = $request->group;
        $user->birth = $request->birth;
        $user->description = $request->description;
        $user->fb_page = $request->fb_page;

        $user->save();
        Role::setRole($user->id, $request->roles);
        if($request->hasFile('avatar'))
        {
          $path = "img/avatar/";
          $avatar = $request->file('avatar');
          $avatarName = $user->id.".".$avatar->getClientOriginalExtension();
          $avatar->move($path, $avatarName);
          Image::make(sprintf($path."%s", $avatarName))->resize(300, 300)->save();
          $user->avatar = $avatarName;
          $user->save();
        }
        return redirect("/admin/users")->with(["messages" => ["type" => "success", "content" => "User updated!"]]);
      } else
        return redirect()->back();
    }

    public function myProfile() {
      $user = auth()->user();
      $address = $user->address()->get();
      $role = $user->role()->first();
      $labels = ["success", "warning","info", "danger", "primary", "default", "purple", "inverse", "pink"];
      return view("ad.user.profile", ["user" => $user, "address" => $address, "role" => $role, "labels" => $labels]);
    }

    public function profile($id) {
      $user = User::find($id);
      if($user) {
        $address = json_decode($user->address);
        $role = $user->role()->first();
        return view("ad.user.profile", ["user" => $user, "address" => $address, "role" => $role]);
      } else
        return redirect()->back();
    }

    public function destroy(UserIdRequest $request) {
      User::destroyNow($request->id);
    }

    public function getPasswordChanging() {
      return view("ad.user.password_changing");
    }

    public function postPasswordChanging(UserPasswordChangingRequest $request) {
      $user = auth()->user();
      if(Hash::check($request->old_password, $user->password)) {
        $user->password = Hash::make($request->new_password);
        $user->save();
        // return redirect()->back()->with(["messages" => ["type" => "success", "content" => "Thay đổi mật khẩu thành công!"]]);
        return redirect("/login")->with(["messages" => ["type" => "success", "content" => "Thay đổi mật khẩu thành công!, hãy tiến hành đăng nhập lại bằng mật khẩu mới!"]]);
      } else
      return redirect()->back()->with(["messages" => ["type" => "warning", "content" => "Mật khẩu cũ không đúng!"]]);
    }

    public function passwordreset($id) {
      $user = User::find($id);
      if($user) {
        $password = str_random(16);
        $user->password = Hash::make($password);
        $user->save();
        return redirect()->back()->with(["messages" => ["type" => "success", "content" => "Đã reset: $user->email ($user->name), với mật khẩu mới là: $password, lưu ý: mật khẩu chỉ cấp 1 lần duy nhất, hãy đổi mật khẩu ngay lần đăng nhập đầu tiên!"]]);
      } else
      return redirect()->back()->with(["messages" => ["type" => "warning", "content" => "Không thể reset mật khẩu cho tài khoản không tồn tại!"]]);
    }
}
