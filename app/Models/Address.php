<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function district()
    {
        return $this->belongsTo('App\Models\District');
    }
}
