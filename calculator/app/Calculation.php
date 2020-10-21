<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calculation extends Model
{
    protected $fillable = [
        'num1', 'num2', 'sumResult', 'subsResult', 'multResult', 'divResult', 'firstEquationResult','secondEquationResult','entryDate','solveDate'
    ];
}
