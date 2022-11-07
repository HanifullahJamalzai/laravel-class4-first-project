<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
class WelcomController extends Controller
{
    public function index()
    {

        return view('welcome');
        // return 'Index method inside Welcome Controller ';
    }

    public function about()
    {

        $var = Test::all();
        // $var = ['name' => 'Ali', 'lastName' => 'Ramazan'];

        // return view('about', ['var' => $var]);
        // return view('about', compact('var'));
        return view('about')->with('var', $var);
    }

}
