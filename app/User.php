<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laracasts\Matryoshka\Cacheable;

class User extends Authenticatable
{

    use Cacheable;

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

    protected $touches = [
        'address'
    ];

    public function address()
    {
        return $this->hasMany('App\Address', 'userId', 'id');
    }
}
