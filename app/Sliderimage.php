<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sliderimage extends Model
{
    protected $table = 'sliders';
    protected $fillable = ['caption','description','image'];
}
