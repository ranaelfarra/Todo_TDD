<?php

namespace App\Managers;

use App\Models\Todo;

class TodoManager
{
    public function listAllTodos(){

        try{

           return Todo::getAllTodos()->toArray();

        }
        catch (\Exception $exception){

            return false;
        }

    }

    public function store($todo){

         try{

             Todo::create($todo);

             return true;
         }
         catch (\Exception $exception){

             return false;
         }
     }

     public function markTodos($ids){

        try{

            return Todo::done($ids);

        }
        catch (\Exception $exception){

            return false;
        }

     }


}