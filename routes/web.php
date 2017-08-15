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
use App\Quiz;

Route::get('/', 'QuizController@comp001');

Route::get('insertQuizData', 'QuizController@insertData');
Route::post('insertQuizData', 'QuizController@insertData');
Route::get('verify', 'QuizController@verifyData');

Route::get('competency001', 'QuizController@comp001');

Route::get('competency002', 'QuizController@comp002');

Route::get('competency003', 'QuizController@comp003');

Route::get('competency007', 'QuizController@comp007');

Route::get('competency008', 'QuizController@comp008');

Route::get('competency009', 'QuizController@comp009');

Route::get('competency010', 'QuizController@comp010');

Route::get('competency011', 'QuizController@comp011');

Route::get('competency012', 'QuizController@comp012');

Route::get('competency013', 'QuizController@comp013');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
