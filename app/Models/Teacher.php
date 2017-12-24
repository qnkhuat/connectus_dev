<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
  protected $table = 'teachers';

  public static $type = [
    "viet_nam" => "Việt Nam",
    "native" => "Bản ngữ",
    "viet_nam_and_native" => "Bản ngữ và Việt Nam"
  ];

  public static $checkType = ['viet_nam', 'native', 'viet_nam_and_native'];

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function courses()
  {
    return $this->belongsTo('App\Models\Course');
  }
}
