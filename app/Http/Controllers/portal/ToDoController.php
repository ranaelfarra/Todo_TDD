<?php

namespace App\Http\Controllers\portal;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index()
    {
        return View('todo');
    }

    public function store(Request $request){



    }
	
	
}
