<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sortController extends Controller
{
    // 後臺排序
    public function selectOld()
    {
        $project=DB::table('projects')->orderBy('id','asc')->get();
        return view('dashboardNews',compact('project'));
    }
    public function selectNew()
    {
        $project=DB::table('projects')->orderBy('id','desc')->get();

        return view('dashboardNews',compact('project'));
    }


    // 前台排序
    public function frontOld()
    {
        $project=DB::table('projects')->orderBy('id','asc')->get();
        return view('index',compact('project'));
    }

    public function frontNew()
    {
        $project=DB::table('projects')->orderBy('id','desc')->get();

        return view('index',compact('project'));
    }
}
