<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TeachersOfCourse;

class Course extends Model
{
  protected $table = 'courses';

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function courseType()
  {
    return $this->belongsTo('App\Models\CourseType');
  }

  public function teachers()
  {
    // return $this->hasMany('App\Models\TeacherOfCourse');
    // return $this->hasManyThrough('App\Models\Teacher', 'App\Models\TeachersOfCourse');
    return TeachersOfCourse::where("course_id", $this->id)->get();
  }

  public function teachersChecked() {
    return TeachersOfCourse::where("course_id", $this->id)->pluck("teacher_id")->toArray();
  }

  public function branchs() {
    return $this->hasMany('App\Models\CourseBranch');
  }

  public function rattings()
  {
    return $this->hasMany('App\Models\Ratting');
  }
}
