<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Laravel\Scout\Searchable;
use App\User;
use App\Models\Role;
use File, Image, Hash;

use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\UserIdRequest;

class UserController extends Controller
{
    // use Searchable;
    public function _list(Request $request) {
      $perpage = (int) $request->perpage;
      $perpage < 5 ? $perpage = 5 : $perpage;
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
      $user->address = json_encode($request->address, JSON_UNESCAPED_UNICODE);

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
        return redirect("/admin/users")->with(["messages" => ["type" => "success", "content" => "User created!"]]);
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
        $user->address = json_encode($request->address, JSON_UNESCAPED_UNICODE);
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
      $user = User::first();
      $address = json_decode($user->address);
      $role = $user->role()->first();
      return view("ad.user.profile", ["user" => $user, "address" => $address, "role" => $role]);
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
}
