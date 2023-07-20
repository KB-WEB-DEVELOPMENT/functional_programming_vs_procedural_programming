<?php
 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Collection;

use App\Functions\funcs;

class CollectionController extends Controller
{
    
    public function show13()
    {    
        $employees = getEmployees();

        $start = microtime(true);

        $employeesArray =   collect($employees)->mapToAssoc(function ($employee) {
                                return [$employee['email'], $employee['name']];
                            })->toArray();

        $timespan = microtime(true) - $start;

        dd($timespan); // 0.00046586990356445  microseconds

    }
}	
