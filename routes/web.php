<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
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

Route::get('/index', [userController::class, 'index']);
Route::get('/show/{Users}', [userController::class, 'show']);
Route::get('/destroy/{Users}', [userController::class, 'destroy']);
Route::get('/create', [userController::class, 'create']);
Route::post('/store', [userController::class, 'store']);
Route::get('/edit/{personne}', [userController::class, 'edit']);
Route::put('/update/{personne}', [userController::class, 'update']);