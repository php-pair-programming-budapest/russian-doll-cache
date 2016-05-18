<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Matryoshka\Cacheable;

class Address extends Model
{

    use Cacheable;

    protected $table = "address";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'street', 'zip', 'city',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function user()
    {
        return $this->belongsTo('App\User', 'userId');
    }
}
