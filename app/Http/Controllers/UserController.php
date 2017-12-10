<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Role;
use File, Image, Hash;

use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function _list() {
      return view("ad.user.list");
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
          $user->save();
        }
        return redirect("/admin/users")->with(["messages" => ["type" => "success", "content" => "User created!"]]);
      } else
        return redirect("/admin/users/create")->with(["result" => "save fail"]);
    }
}
