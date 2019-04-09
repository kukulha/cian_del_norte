<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machinery extends Model
{
    protected $fillable = [
    	'name', 'slug', 'excerpt', 'file', 'brand', 'data'
    ];
}
