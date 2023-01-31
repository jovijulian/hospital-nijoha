<?php

use App\Http\Controllers\PolyclinicController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\HomeController;
use App\Models\Polyclinic;
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

Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::resource('polyclinic', PolyclinicController::class);
Route::resource('doctor', DoctorController::class);
Route::resource('patient', PatientController::class);

Route::post('api/doctor', [PatientController::class, 'fetchDoctor']);


Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});