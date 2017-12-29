<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseBranch extends Model
{
    protected $table = 'course_branchs';

    public function course()
    {
      return $this->belongsTo('App\Models\Course');
    }

    public function address()
    {
      return $this->belongsTo('App\Models\Address');
    }

    public function orders() {
      return $this->hasMany('App\Models\Order');
    }
}
