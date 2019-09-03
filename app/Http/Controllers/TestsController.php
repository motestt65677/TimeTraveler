<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Debugbar;
class TestsController extends Controller
{
    public function home(Request $request)
    {
        return $request ->abc;
    }

    public function home1(Request $request)
    {
        //return redirect() -> route('test.home') -> with('error', 'heyyy');
        Debugbar::info($request);
        return view('test.home1');
    }

    public function store(Request $request)
    {
        //
        

    }

    //
}
