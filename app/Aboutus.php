<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
    protected $table = 'abouts';
    protected $fillable = ['title','description'];
}
