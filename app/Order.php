<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $fillable=['country','name','last_name','company_name','address_street',

                      'address_apartment','city','county','postcode','email','phone',
                      
                      'user_id','status','basket'];
}
