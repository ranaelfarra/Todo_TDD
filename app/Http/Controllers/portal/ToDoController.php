<?php

namespace App\Http\Controllers\portal;


use App\Http\Controllers\Controller;


class ToDoController extends Controller
{
    public function index()
    {
        return View('todo');
    }
	
}
