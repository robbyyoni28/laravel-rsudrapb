<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\home;
use App\Http\Controllers\about;
use App\Http\Controllers\profile;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [home::class, 'home']);
Route::get('/about', [about::class, 'about']);
Route::get('/profile',[profile::class,'profile']);

