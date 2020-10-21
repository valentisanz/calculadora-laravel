<?php

use App\Calculation;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('calculate {num1} {num2}', function ($num1, $num2) {
    $entryDate=date("h:i:sa d/m/Y");
    $sumResult = $num1 + $num2;
    $subsResult = $num1 - $num2;
    $multResult = $num1 * $num2;
    $divResult = $num1 / $num2;
    $discriminating = pow($num2, 2) - 4 * $num1 * 5;
    if ($discriminating < 0) {
        $firstEquationResult = 'Not a real number';
        $secondEquationResult = 'Not a real number';
    } else {
        $firstEquationResult = -$num2 + sqrt($discriminating);
        $firstEquationResult = $firstEquationResult / (2 * $num1);
        $secondEquationResult = -$num2 - sqrt($discriminating);
        $secondEquationResult = $secondEquationResult / (2 * $num1);
    }
    $solveDate=date("h:i:sa d/m/Y");

    Calculation::create(compact(
        'num1',
        'num2',
        'sumResult',
        'subsResult',
        'multResult',
        'divResult',
        'firstEquationResult',
        'secondEquationResult',
        'entryDate',
        'solveDate'
    ));
})->describe('Calculator');
