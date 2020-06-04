<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'product_id', 'name', 'amount', 'elaboration', 'expiration',
    ];
}
