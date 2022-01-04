<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\home;
use App\Http\Controllers\about;
use App\Http\Controllers\profile;
use App\Http\Controllers\rawatjalan;
use App\Http\Controllers\RawatinapController;
use App\Http\Controllers\McuController;
use App\Http\Controllers\HemodialisaController;
use App\Http\Controllers\LaboratoriumController;
use App\Http\Controllers\BedahController;
use App\Http\Controllers\FisioterapiController;
use App\Http\Controllers\RadiologiController;
use App\Http\Controllers\FarmasiController;
use App\Http\Controllers\IgdController;
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
Route::get('/rawatjalan',[rawatjalan::class,'rawatjalan']);
Route::get('/rawatinap',[RawatinapController::class,'RawatinapController']);
Route::get('/medicalcheckup',[McuController::class,'McuController']);
Route::get('/hemodialisa',[HemodialisaController::class,'HemodialisaController']);
Route::get('/laboratorium',[LaboratoriumController::class,'LaboratoriumController']);
Route::get('/bedah',[BedahController::class,'BedahController']);
Route::get('/fisioterapi',[FisioterapiController::class,'FisioterapiController']);
Route::get('/radiologi',[RadiologiController::class,'RadiologiController']);
Route::get('/farmasi',[FarmasiController::class,'FarmasiController']);
Route::get('/igd',[IgdController::class,'IgdController']);

