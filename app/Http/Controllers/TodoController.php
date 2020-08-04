<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    //listing controller
    public function home(){
        $title = 'Home wow';
        $todos = Todo::all();
        return view('home', ['title' => $title , 'todoArray' => $todos] );
    }
    //saving controller
    public function saveEntry(Request $req){
        $validated  = $req->validate([
            'name'=>['required','max:50']
        ]);

        // $todo = new Todo();
        // $todo->name = $req->name;
        // $todo->save();

        Todo::create($validated); // simple bulk entry code that simplifies above 3 line codes
        return redirect(route('home'));
    }

    //fetching controller
    public function fetchToUpdate(Todo $todo){
        // dd($todo);
        if(!$todo)
            return abort(400);
        return view('update',compact('todo'));
    }

    //updating controller
    public function updateEntry(Request $req , Todo $todo){
        $validated  = $req->validate([
            'name'=>['required','max:50']
        ]);
        $todo->update($validated);
        // dd($validated);

        return redirect(route('home'));
    }
    //deleting controller
    public function deleteEntry(Todo $todo){
        $todo->delete();
        return back();
    }

}