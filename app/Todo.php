<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    public $table = "todolist";
    protected $fillable = [
    	'todo'
    ];
}
