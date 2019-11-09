<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    
    // protected $garded=['title'];
    protected $fillable = ['title','author','category_id'];

    
    public function category() {
        return $this->belongsTo('Category::class');
    }
}
