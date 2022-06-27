<?php

use Illuminate\Support\Facades\Route;

Route::get('/visit', [App\Http\Controllers\VisitController::class, 'countVisit']);
