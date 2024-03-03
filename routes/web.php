<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Livewire\SwitchTheme;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/switch-theme', SwitchTheme::class);


Route::get('/hi', [TestController::class,'hi']);
Route::get('/hello', [TestController::class,'hello']);
Route::get('/greet', [TestController::class,'greet']);

