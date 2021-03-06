<?php

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

Route::post('/calculate', 'CalculatorController@incrementFunc');

Route::get('/app/{post}', 'PagesController@show');
/*
Route::get('/', 'PagesController@index');
Route::post('/', 'PagesController@index');
Route::post('/button', 'PagesController@index');
Route::get('/button', function () {
    return view('pages.button');
});


Route::get('/button', function () {
    return view('pages.button');
});
Route::post('/calculate','CalculatorController@calculateFunc');
Route::post('/calculate','CalculatorController@calculateFunc');
*/