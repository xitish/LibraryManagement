<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'rollyear', 'rollfaculty', 'rollno', 'admin', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function singleBooks()
    {
        return $this->hasMany('App\SingleBook');
    }
}
