<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseFollow;

class CourseFollowsController extends Controller
{
    public function create(Request $request) {
        if(auth()->user()) {
            $user = auth()->user();
            $course = Course::find($request->id);
            if($course) {
                $followExits = CourseFollow::where("user_id", $user->id)->where("course_id", $course->id)->count() > 0 ? true : false;
                if(!$followExits) {
                    $courseFollow = new CourseFollow;
                    $courseFollow->user_id = $user->id;
                    $courseFollow->course_id = $course->id;
                    $courseFollow->save();
                    $totalCourseFollows = $user->courseFollows()->count();
                    return ["success" => true, "message" => "Bạn đã quan tâm 1 khóa học!", "totalCourseFollows" => $totalCourseFollows];
                } else
                return ["success" => false, "message" => "Bạn đã quan tâm khóa học này trước đó!"];
            } else
            return ["success" => false, "message" => "Khóa học không tồn tại!"];
        } else
        return ["success" => false, "message" => "Bạn chưa đăng nhập, hãy đăng nhập trước khi nhấn quan tâm một khóa học!"];
    }

    public function destroy(Request $request) {
        if(auth()->user()) {
            $user = auth()->user();
            $course = Course::find($request->id);
            if($course) {
                $followExits = CourseFollow::where("user_id", $user->id)->where("course_id", $course->id)->count() > 0 ? true : false;
                if($followExits) {
                    $courseFollow = CourseFollow::where("user_id", $user->id)->where("course_id", $course->id)->first();
                    $courseFollow->delete();
                    $totalCourseFollows = $user->courseFollows()->count();
                    return ["success" => true, "message" => "Bạn đã bỏ quan tâm 1 khóa học!", "totalCourseFollows" => $totalCourseFollows];
                } else
                return ["success" => false, "message" => "Không thể bỏ quan tâm khóa học này vì hiện tại bạn không quan tâm nó!"];
            } else
            return ["success" => false, "message" => "Khóa học không tồn tại!"];
        } else
        return ["success" => false, "message" => "Bạn chưa đăng nhập, hãy đăng nhập trước khi bỏ quan tâm một khóa học!"];
    }
}
