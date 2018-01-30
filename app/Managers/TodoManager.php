<?php

namespace App\Managers;

use App\Models\Todo;
use Illuminate\Database\QueryException;

class TodoManager
{
    /**
     * List all undone to-dos
     *
     * @return \Exception|QueryException
     */
    public function listAllUndoneTodos(){

        try{

           return Todo::getTodos(false)->toArray();

        }
        catch (QueryException $exception){

            return $exception;
        }

    }

    /**
     * List all done to-dos
     *
     * @return \Exception|QueryException
     */
    public function listAllDoneTodos(){

        try{

            return Todo::getTodos(true)->toArray();

        }
        catch (QueryException $exception){

            return $exception;
        }

    }

    /**
     * Store new Todo
     *
     * @param $todo
     * @return \Exception|QueryException|static
     */
    public function store($todo){

         try{

             return Todo::create($todo);
         }
         catch (QueryException $exception){

             return $exception;
         }
     }

    /**
     * Mark Todo as done
     *
     * @param $ids
     * @return \Exception|QueryException
     */
    public function markTodos($ids){

        try{

            return Todo::done($ids);

        }
        catch (QueryException $exception){

            return $exception;
        }

     }

    /**
     * Delete Todo
     *
     * @param $ids
     * @return \Exception|QueryException
     */
    public function delete($ids){

         try{

             return Todo::deleteTodos($ids);

         }
         catch (QueryException $exception){

             return $exception;
         }
     }

}