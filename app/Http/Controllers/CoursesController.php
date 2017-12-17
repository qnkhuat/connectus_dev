<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function _list() {
      return view("ad.courses.list");
    }

    public function _new() {
      return view("ad.courses.new");
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
