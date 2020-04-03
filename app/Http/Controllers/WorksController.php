<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Works;
use App\WorksInfo;

class WorksController extends MainController
{
    public function __construc(){
        parent::__construct();
    }
    public function show(Request $req, $id)
    {
        $menu = $this->menu;
        $title = Works::getData($id);
        $info = WorksInfo::getData($id);
        return view('pages.case', compact('title', 'info','menu'));
    }
}
