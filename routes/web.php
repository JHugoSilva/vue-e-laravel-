<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/users', [UserController::class, 'index']);
Route::post('/api/user', [UserController::class, 'store']);

Route::get('{view}', ApplicationController::class)->where('view', '(.*)');

/*Route::get('/admin/dashboard', function(){
    return view('dashboard');
});*/
