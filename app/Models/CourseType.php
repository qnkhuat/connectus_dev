<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseType extends Model
{
  protected $table = 'course_types';

  public function courses()
  {
    return $this->hasMany('App\Models\Course');
  }
}
