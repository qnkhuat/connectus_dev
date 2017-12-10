<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  protected $table = 'courses';

  public function courseType()
  {
    return $this->belongsTo('App\Models\CourseType');
  }

  public function teachers()
  {
    return $this->hasMany('App\Models\Teacher');
  }

  public function rattings()
  {
    return $this->hasMany('App\Models\Ratting');
  }
}
