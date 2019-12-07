<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    protected $table = "works";
    protected $fillable = ['name','description','img'];
    public $timestamps = false;

    protected function getData($id)
    {
        $title = Works::where('id', $id)->get()->toArray();
        foreach ($title as $item) {
            return $item;
        }
    }
}
