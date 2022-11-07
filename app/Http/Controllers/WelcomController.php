<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomController extends Controller
{
    public function index()
    {

        return view('welcome');
        // return 'Index method inside Welcome Controller ';
    }

    public function about()
    {
        $var = ['name' => 'Ali', 'lastName' => 'Ramazan'];

        // return view('about', ['var' => $var]);
        // return view('about', compact('var'));
        return view('about')->with('var', $var);
    }
}
