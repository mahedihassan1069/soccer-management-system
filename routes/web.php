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

//frontend......................
//Route::get('/',function(){
	//return view('layout');
//});

Route::get('/main', 'MainController@index');
Route::get('/about', 'AboutController@index');
Route::get('/news', 'NewsController@index');
Route::get('/event', 'EventController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/point_table', 'PointController@index');
Route::get('/match', 'MatchController@index');
Route::get('/payment', 'PaymentController@index');





//backend...............................
Route::get('/logout','SuperAdminController@logout');
Route::get('/admin', 'AdminController@index');
Route::get('/dash', 'AdminController@show_dash');
Route::post('/admin-dashbord', 'AdminController@dashbord');


//event route...............
Route::get('/add-event', 'TournamentsController@index');
Route::get('/all-event', 'TournamentsController@all_event');
Route::post('/save-event', 'TournamentsController@save_event');
Route::get('/edit-event/{tournaments_id}', 'TournamentsController@edit_event');

// register

Route::get('/reg/save', 'regController@index');
Route::post('/reg/save', 'regController@save');
Route::get('/reg/player', 'regController@indexplayer');
Route::post('/reg/player', 'regController@x');

