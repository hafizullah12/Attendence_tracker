<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semister extends Model
{
    
    protected $fillable = [
        'name', 'description',
    ];
}
