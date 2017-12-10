<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $table = 'categories';

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function posts()
  {
    return $this->hasMany('App\Models\Post');
  }
}
