<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\Include_;

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

include('superAdmin.php');
include('administrator.php');
include('receptionist.php');
include('volunteer.php');
include('pathologist.php');

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
Auth::routes(['register' => false]);

// Route for center registration
Route::get('/center-register', 'Auth\CenterRegistrationController@centerRegister')->name('centerRegister');
Route::post('/center-register-data-store', 'Auth\CenterRegistrationController@centerRegisterDataStore')->name('centerRegisterDataStore');

Route::get('/api/get-state-list/{country_id}','Auth\CenterRegistrationController@getStateList');
Route::get('/api/get-city-list/{state_id}','Auth\CenterRegistrationController@getCityList');

