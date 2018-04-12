<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseBranch;
use App\Models\Address;
use App\Http\Requests\CourseBranchCreateRequest;
use App\Http\Requests\CourseBranchUpdateRequest;
use App\Http\Requests\CourseBranchIdRequest;

class CourseBranchsController extends Controller
{
    public function _new(Request $request) {
        $user = auth()->user();
        $course = $user->courses()->where("id", $request->id)->first();
        if($course) {
            $address = $user->address;
            return view("ad.course_branchs.new", ["course" => $course, "address" => $address]);
        } else
        return redirect("/hi")->with(["messages" => ["type" => "danger", "content" => "Not auth!"]]);
    }

    public function create(CourseBranchCreateRequest $request) {
        $user = auth()->user();
        $isAuth = $user->courses->find($request->id);
        if($isAuth) {
            $courseBranch = new CourseBranch;
            $courseBranch->course_id = $request->course_id;
            $courseBranch->day_of_week = $request->day_of_week;
            $courseBranch->opening = $request->opening;
            $courseBranch->address_id = $request->address_id;
            $courseBranch->time_from = $request->time_from;
            $courseBranch->time_to = $request->time_to;
            $courseBranch->save();
            return redirect("/hi/courses/branchs/$courseBranch->course_id")->with(["messages" => ["type" => "success", "content" => "Saved!"]]);
        } else
        return redirect()->back()->with(["messages" => ["type" => "danger", "content" => "Not Auth!"]]);
    }

    public function _list(Request $request) {
        $user = auth()->user();
        $course = $user->courses()->where("id", $request->id)->first();
        if($course) {
            $address = $user->address;
            $perpage = (int) $request->perpage;
            $perpage < 5 ? $perpage = 50 : $perpage;
            $perpage > 50 ? $perpage = 50 : $perpage;
            $branchs = CourseBranch::where("course_id", $course->id)->paginate($perpage);
            return view("ad.course_branchs.list", ["course" => $course, "branchs" => $branchs, "address" => $address]);
        } else
        return redirect("/hi")->with(["messages" => ["type" => "danger", "content" => "Not auth!"]]);
    }

    public function edit(Request $request) {
        $user = auth()->user();
        $course = $user->courses()->where("id", $request->id)->first();
        if($course) {
            $courseBranch = CourseBranch::where("course_id", $course->id)->where("id", $request->branch_id)->first();
            if($courseBranch) {
                $address = $user->address;
                return view("ad.course_branchs.edit", ["course" => $course, "courseBranch" => $courseBranch, "address" => $address]);
            } else
                return redirect("/hi")->with(["messages" => ["type" => "danger", "content" => "Not auth!"]]);
        } //else
        // return redirect("/hi")->with(["messages" => ["type" => "danger", "content" => "Not auth!"]]);
    }

    public function update(CourseBranchUpdateRequest $request) {
        $user = auth()->user();
        $isAuth = $user->courses()->where("id", $request->id)->first();
        $isExits = CourseBranch::where("id", $request->id)->where("course_id", $request->course_id)->count() > 0 ? true : false;
        if($isAuth && $isExits) {
            $courseBranch = CourseBranch::where("id", $request->id)->where("course_id", $request->course_id)->first();
            $courseBranch->day_of_week = $request->day_of_week;
            $courseBranch->opening = $request->opening;
            $courseBranch->address_id = $request->address_id;
            $courseBranch->time_from = $request->time_from;
            $courseBranch->time_to = $request->time_to;
            $courseBranch->save();
            return redirect("/hi/courses/branchs/$courseBranch->course_id")->with(["messages" => ["type" => "success", "content" => "Saved!"]]);
        } else
        return redirect()->back()->with(["messages" => ["type" => "danger", "content" => "Not Auth!"]]);
    }

    public function destroy(Request $request) {
        $user = auth()->user();
        $isAuth = $user->courses()->where("id", $request->id)->count() > 0 ? true : false;
        $isExits = CourseBranch::where("id", $request->branch_id)->where("course_id", $request->id)->count() > 0 ? true : false;
        if($isAuth && $isExits) {
            $courseBranch = CourseBranch::where("id", $request->branch_id)->where("course_id", $request->id)->first();
            $courseBranch->delete();
        }
    }
}
