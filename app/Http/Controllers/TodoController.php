<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    
    public function index()
    {


        
        $todos = session('todos', []);
        return view('dash.Home', ['todos' => $todos]);
    }
    
    public function store(Request $request)
    {
        // Check if the 'todos' session key exists and initialize it if not
        if (!session()->has('todos')) {
            session(['todos' => []]);
        }
    
        // Add the new task to the 'todos' session array
        $todos = session('todos');
        $todos[] = $request->input('todo1');
        session(['todos' => $todos]);
    
        return redirect()->route('todos.index');
    }
    
    public function destroy($todo)
    {
        // Retrieve tasks from the session
        $todos = session('todos', []);
    
        // Check if the task exists in the array and remove it
        if (($key = array_search($todo, $todos)) !== false) {
            unset($todos[$key]);
        }
    
        // Store the updated tasks back in the session
        session(['todos' => $todos]);
    
        return redirect()->route('todos.index');
    }
}    