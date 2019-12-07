<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Works;
use App\WorksInfo;

class WorksController extends Controller
{
    public function show(Request $req, $id)
    {
        $title = Works::getData($id);
        $info = WorksInfo::getData($id);
        return view('pages.case', compact('title', 'info'));
    }
}
