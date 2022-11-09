<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        // dd($todos);
        return view('todo.index', compact('todos'));
    }

    public function store()
    {
        $dataCameFromForm = request()->all();
        Todo::create(request()->all());
        // dd($dataCameFromForm);
        // return 'created successfully';
        return redirect('todo');
    }
}
