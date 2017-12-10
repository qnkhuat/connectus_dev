<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerInfo extends Model
{
  protected $table = 'partner_infos';

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
