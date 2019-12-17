<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menus";

    protected function getMenu()
    {
        $menu = $this::get()->toArray();
        return $menu;
    }
}
