<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;
class VisitController extends Controller
{
    function countVisit(Request $request){
        $visitTable =  new Visit;
        $visitTable->ip = $request->ip();
        $visitTable->save();
    }
}
