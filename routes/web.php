<?php
// use Symfony\Component\Routing\Route;

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
    return redirect()->route('student.index');
});

Auth::routes();

Route::get('lang/{locale}', 'LocalizationController@index');


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('student', 'StudentController');
