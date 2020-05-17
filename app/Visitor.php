<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $table = 'message';
    protected $fillable = ['name','phone','email','msg'];
}
