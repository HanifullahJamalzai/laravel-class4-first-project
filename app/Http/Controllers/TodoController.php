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
    public function show($id){
        $todo  = Todo::find($id);
        // dd($todo);
        return view('todo.show', compact('todo'));
    }

    public function destroy($id)
    {
        // $todo = Todo::find($id)->delete();
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('todo');
    }
}
