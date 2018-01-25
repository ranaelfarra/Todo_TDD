<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Todo extends Model
{
    protected $table = 'to_dos';

    protected $fillable = ['description'];

    public static function getAllTodos(){

        return Todo::select('id','description')->get();
    }
    public static function done($ids){


        return DB::table('to_dos')->whereIn('id', $ids)->update(['done' => 1]);
    }

}