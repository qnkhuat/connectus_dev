<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pages()
  	{
  		return $this->hasMany('App\Models\Page');
  	}

    public function posts()
  	{
  		return $this->hasMany('App\Models\Post');
  	}

    public function role()
  	{
  		return $this->hasOne('App\Models\Role');
  	}

    public function courseTypes()
  	{
  		return $this->hasMany('App\Models\CourseType');
  	}

    public function courses()
  	{
  		return $this->hasMany('App\Models\Course');
  	}

    public function teachers()
  	{
  		return $this->hasMany('App\Models\Teacher');
  	}

    public function rattings()
  	{
  		return $this->hasMany('App\Models\Ratting');
  	}

    public function orders()
  	{
  		return $this->hasMany('App\Models\Order');
  	}
}
