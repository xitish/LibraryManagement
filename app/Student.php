<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'roll_no', 'name',
    ];

    public function books()
    {
        return $this->hasMany('App\Book');
    }
}
