<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SingleBook extends Model
{
    protected $fillable = [ 'book_number', 'student_id', 'book_id' ];
    
    public function book()
    {
        return $this->belongsTo('App\Book');
    }
}
