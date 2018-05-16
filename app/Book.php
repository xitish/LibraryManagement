<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = 'book_id';
    
    protected $fillable = [
        'book_id', 'name', 'author','publication',
    ];
}
