<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeachersOfCourse extends Model
{
    protected $table = 'teachers_of_courses';

    public function course()
    {
      return $this->belongsTo('App\Models\Course');
    }
}
