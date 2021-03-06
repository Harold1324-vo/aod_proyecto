<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputersController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\ProcessorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'computers' => ComputersController::class,
    'monitors' => MonitorController::class,
    'keyboards' => KeyboardController::class,
    'processors' => ProcessorController::class,
]);
