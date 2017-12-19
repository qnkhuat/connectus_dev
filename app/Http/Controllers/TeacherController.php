<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests\TeacherCreateRequest;
use App\Http\Requests\TeacherUpdateRequest;
use App\Http\Requests\TeacherIdRequest;

class TeacherController extends Controller
{
  public function _new() {
    return view("ad.teachers.new");
  }

  public function _list() {
    return view("ad.teachers.list");
  }

  public function _listAll() {
    return view("ad.teachers.list_all");
  }

  public function create(TeacherCreateRequest $request) {

  }

  public function edit() {
    return view("ad.teachers.edit");
  }

  public function update(TeacherUpdateRequest $request) {

  }

  public function destroy(TeacherIdRequest $request) {

  }
}
