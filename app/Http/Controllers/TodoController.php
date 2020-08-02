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
            'name'=>['required','max:50','email:rfc,dns']
        ]);

        // $todo = new Todo();
        // $todo->name = $req->name;
        // $todo->save();

        Todo::create($validated); // simple bulk entry code that simplifies above 3 line codes
        return redirect(route('home'));
    }
}
