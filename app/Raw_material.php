<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raw_material extends Model
{
        protected $fillable = [
        'name', 'amount', 'price', 'expiration',
        ];
}
