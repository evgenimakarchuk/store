<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public $table = 'categories';
    public function category(){
        return $this->belongsTo('App\Category','parent_id');
    }
    public function categories(){
        return $this->hasMany('App\Category','parent_id');
    }
}
