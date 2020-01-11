<?php

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
Route::name('survey.')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/survey', function () {
        return view('survey');
    })->name('start');

    Route::get('/result','SurveyController@index')->name('result');
    Route::post('/submit', 'SurveyController@store')->name('submit');


});
