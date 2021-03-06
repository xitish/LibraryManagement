<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //protected $primaryKey = 'book_id';
    
    protected $fillable = [
        'name', 'author','publication', 'photo', 'description'
    ];

    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    public function singleBooks()
    {
        return $this->hasMany('App\SingleBook');
    }
}