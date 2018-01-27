<?php

namespace App\Managers;

use App\Models\Todo;

class TodoManager
{
    public function listAllUndoneTodos(){

        try{

           return Todo::getTodos(false)->toArray();

        }
        catch (\Exception $exception){

            dd($exception);
            return false;
        }

    }

    public function listAllDoneTodos(){

        try{

            return Todo::getTodos(true)->toArray();

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

     public function delete($ids){

         try{

             return Todo::deleteTodos($ids);

         }
         catch (\Exception $exception){

             return false;
         }
     }

}