<?php

namespace App\Managers;

use App\Models\Todo;

class TodoManager
{
    public function listAllUndoneTodos(){

        try{

           return Todo::getUndoneTodos()->toArray();

        }
        catch (\Exception $exception){

            return false;
        }

    }

    public function listAllDoneTodos(){

        try{

            return Todo::getDoneTodos()->toArray();

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