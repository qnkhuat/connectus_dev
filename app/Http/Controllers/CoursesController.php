<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CourseType;

class CoursesController extends Controller
{
    public function _list() {
      return view("ad.courses.list");
    }

    public function _new() {
      $types = CourseType::where("deleted", false)->orderBy("updated_at", "desc")->get();
      return view("ad.courses.new", ["types" => $types]);
    }

    public function create() {

    }

    public function edit() {
      return view("ad.courses.edit");
    }

    public function update() {

    }

    public function destroy() {

    }
}
