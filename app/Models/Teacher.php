<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
  protected $table = 'teachers';

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function courses()
  {
    return $this->belongsTo('App\Models\Course');
  }
}
