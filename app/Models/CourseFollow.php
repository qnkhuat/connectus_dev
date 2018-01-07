<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseFollow extends Model
{
    protected $table = 'course_follows';

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function course()
    {
      return $this->belongsTo('App\Models\Course');
    }
}
