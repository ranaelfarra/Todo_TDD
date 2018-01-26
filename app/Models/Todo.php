<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Todo extends Model
{
    protected $table = 'to_dos';

    protected $fillable = ['description'];

    public static function getUndoneTodos(){

        return Todo::select('id','description')->where('done',0)->get();
    }

    public static function getDoneTodos(){

        return Todo::select('id','description')->where('done',1)->get();
    }
    public static function done($ids){


        return DB::table('to_dos')->whereIn('id', $ids)->update(['done' => 1]);
    }

}