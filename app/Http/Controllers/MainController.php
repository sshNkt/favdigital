<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MainController extends Controller
{
    protected $menu;
    public function __construct()
    {
        $this->menu = Menu::getMenu();
    }
}
