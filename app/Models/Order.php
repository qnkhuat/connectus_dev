<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $table = 'orders';

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function course()
  {
    return $this->belongsTo('App\Models\Course');
  }

  public function courseBranch()
  {
    return $this->belongsTo('App\Models\CourseBranch');
  }

  public function address()
  {
    return $this->belongsTo('App\Models\Address');
  }
}
