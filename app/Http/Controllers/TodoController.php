<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = todo::where('status','pending')->get();
        $completeTodos = todo::where('status','complete')->get();
        return view("index",[
            'todos' => $todos,
            'completeTodos' => $completeTodos,
        ]);
    }
    public function addtodo()
    {
        return view("addtodo");
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        
        $todo = new todo();
        $todo->title = $validated['title'];
        $todo->description = $validated['description'];
        $todo->save();
        return redirect()->route('index')->with('massage','Todo Addedd Successfully');
    }


    public function completeTodo($id)
    {
        $todo = todo::find($id);
        $todo->status = "complete";
        $todo->save();
        return redirect()->back();
    }
    public function destroy(todo $id)
    {
        $id->delete();
        return redirect()->back()->with('delete', 'Complete Todos has been Deleted');
    }
}
