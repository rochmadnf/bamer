<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;


Route::get('/', [Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/cluster-map', Controllers\ClusterMapController::class)->name('cluster-map');
Route::get('/researcher', Controllers\ResearcherController::class)->name('researcher');
Route::get('/app-info', Controllers\AppInfoController::class)->name('app-info');
Route::get('/mutu-standard', Controllers\MutuStandardController::class)->name('mutu-standard');
