<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Role;

class test_controller extends Controller
{
    public function test() {
      $a = "view_user";
      $role = new Role;
      $role->user_id = 3;
      $role->$a = true;
      $role->save();
      echo "<pre>";
      print_r($role);
      echo "</pre>";
    }
}
