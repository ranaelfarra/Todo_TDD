<?php

namespace App\Http\Controllers\portal;


use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index()
    {
        $data['undone_todos'] = App('TodoManager')->listAllUndoneTodos();

        $data['done_todos']   = App('TodoManager')->listAllDoneTodos();

        return View('todo')->with('data',$data);
    }

    public function store(Request $request){

        $result = App('TodoManager')->store($request->all());

        if($result instanceof Todo){
            $request->session()->flash('message', 'Todo successfully saved!');
        }

        else {
            $request->session()->flash('error', TRUE);
            $request->session()->flash('message', 'Error please try again');
        }
        return redirect()->back();
    }

    public function done(Request $request){

        $result = App('TodoManager')->markTodos($request->except('_token')['id']);

        if($result){
            $request->session()->flash('message', 'To-dos successfully marked as done!');
        }

        else {
            $request->session()->flash('error', TRUE);
            $request->session()->flash('message', 'Error please try again');
        }
        return redirect()->back();
    }

    public function destroy(Request $request){

        $result = App('TodoManager')->delete($request->except('_token')['id']);

        if($result){
            $request->session()->flash('message', 'To-dos successfully deleted');
        }

        else {
            $request->session()->flash('error', TRUE);
            $request->session()->flash('message', 'Error please try again');
        }
        return redirect()->back();
    }
	
	
}
