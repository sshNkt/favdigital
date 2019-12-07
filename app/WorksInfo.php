<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorksInfo extends Model
{
    protected $table = "works_infos";
    protected $fillable = ['review','timeLine','wireframing','colors','icons','image1','image2','image3','image4'];
    public $timestamps = false;

    protected function getData($id)
    {
        $info = WorksInfo::where('work_id', $id)->get()->toArray();
        foreach ($info as $item) {
            return $item;
        }
    }
}
