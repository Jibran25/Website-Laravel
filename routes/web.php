<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Base_Controller;
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

Route::get('/index.html', [Base_Controller::class,'home']);
Route::get('/services.html', [Base_Controller::class,'services']);
Route::get('/company.html', [Base_Controller::class,'company']);
Route::get('/contact.html', [Base_Controller::class,'contact_us']);