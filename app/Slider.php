<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = "sliders";
    protected $fillable = ['img','text','btn_link','btn_name','logo'];
    public $timestamps = false;
}
