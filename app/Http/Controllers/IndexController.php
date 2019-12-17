<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Works;
use App\WorksInfo;

class IndexController extends MainController
{   
    
    public function __construct()
    {
        parent::__construct();
    }
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $works = Works::get();
        $slides = Slider::get();
        $menu = $this->menu;
        return view('pages.index', compact('slides', 'works','menu'));
    }

    public function contact()
    {
        $menu = $this->menu;
        return view('pages.contact',compact('menu'));
    }
}
