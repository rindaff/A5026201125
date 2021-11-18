<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showEts()
    {
        return view('etsweb');
    }
    function convertfunc(Request $request)
    {
        return view('convertweb');
    }
}
