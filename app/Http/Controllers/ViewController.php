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
    function showConvert()
    {
        return view('convertweb');

    }

    function calcFactorial(Request $request)
    {
        $bil = $request->n1;
        $factorial=1;
        for ($i=1; $i<=$bil;$i++){
            $factorial = $factorial * $i;
        }

        return redirect('tugasphp')->with('hasil', 'Factorial of '.$bil. ' : ' .$factorial);
    }
}
