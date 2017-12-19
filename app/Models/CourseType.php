<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseType extends Model
{
  protected $table = 'course_types';

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function courses()
  {
    return $this->hasMany('App\Models\Course');
  }
}
