<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Randomize extends Model
{
    protected $fillable = ['numbers'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
