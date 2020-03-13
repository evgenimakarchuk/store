<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public function categories(){
        return $this->belongsTo('TCG\Voyager\Models\Category','category_id','id',);
    }
}
