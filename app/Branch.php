<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = [
        'name', 
        'email',
        'address1',
        'address2',
        'county',
        'city',
        'postcode',
        'telephone',
        'fax',
        'click_and_collect',
        'latitude',
        'logitude',
        'available'
    ];
}
