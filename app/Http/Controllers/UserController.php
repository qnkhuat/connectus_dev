<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Role;

class UserController extends Controller
{
    public function _new() {
      $userTypes = User::$types;
      $roles = Role::$list;
      $genders = User::$genders;
      return view("ad.user.create", ['userTypes' => $userTypes, 'roles' => $roles, 'genders' => $genders]);
    }
}
