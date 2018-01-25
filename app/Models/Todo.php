<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'to_dos';

    protected $fillable = ['description'];

    public static function getAllTodos(){

        return Todo::select('id','description')->get();
    }

}