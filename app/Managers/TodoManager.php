<?php

namespace App\Managers;

use App\Models\Todo;

class TodoManager
{
     public function store($todo){
         try{
             Todo::create($todo);
             return true;
         }
         catch (\Exception $exception){
             return false;
         }
     }

}