<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'description', 'ID_factory', 's/n','uudid', 'FCC_ID', 
    ];
}
