<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ratting extends Model
{
  protected $table = 'rattings';

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function courses()
  {
    return $this->belongsTo('App\Models\Course');
  }
}
