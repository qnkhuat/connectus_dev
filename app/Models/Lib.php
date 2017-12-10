<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lib extends Model
{
    public function toJson($arr)
    {
      return json_encode($arr, JSON_UNESCAPED_UNICODE);
    }
}
