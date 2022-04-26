<?php

use App\Http\Controllers\Main;
use Illuminate\Support\Facades\Route;

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

Route::get('/Laravel', function () {
    return view('welcome');
});

Route::controller(Main::class)->group(function () { 
    Route::get('/', 'Home')->name('Home');
    Route::get('/CreateContact', 'CreateContact')->name('CreateContact');
    Route::post('/CreateContact', 'CreateContact');
});


