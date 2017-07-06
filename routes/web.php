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

Route::get('/', 'QuizController@indexReturn');

Route::get('insertQuizData', 'QuizController@insertData');
Route::post('insertQuizData', 'QuizController@insertData');
Route::get('verify', 'QuizController@verifyData');

Route::get('comp002', 'QuizController@comp002');

Route::get('comp003', 'QuizController@comp003');

Route::get('comp007', 'QuizController@comp007');

Route::get('comp008', 'QuizController@comp008');

Route::get('comp009', 'QuizController@comp009');

Route::get('comp010', 'QuizController@comp010');

Route::get('comp011', 'QuizController@comp011');

Route::get('comp012', 'QuizController@comp012');

Route::get('comp013', 'QuizController@comp013');
