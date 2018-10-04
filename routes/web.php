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

Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('/VerClientes', 'ClientController@getClientData')->name('VerClientes');
Auth::routes();
Route::group(['middleware' => ['auth'] ], function()

{
	Route::get('/home', 'ClientController@index')->name('home');
	//ver las encuestas de los clientes
	Route::get('/Encuestas', 'ClientController@Encuestas')->name('Encuestas');
	//gets the points
	Route::get('/getPoints', 'ClientController@getPoints')->name('getPoints');
	//gets the points
	Route::get('/sentsurveys', 'ClientController@SentSurveys')->name('SentSurveys');
	//gets the points
	Route::get('/answeredsurveys', 'ClientController@AnsweredSurveys')->name('AnsweredSurveys');
	//gets the points
	Route::get('/senttrip', 'ClientController@SentTrip')->name('SentTrip');;
	//gets the points
	Route::get('/commentsreceived', 'ClientController@CommentsReceived')->name('CommentsReceived');
	//gets the points
	Route::get('/commentsNotSeen', 'ClientController@commentsNotSeen')->name('commentsNotSeen');

	//gets the points
	Route::get('/ChangeStatus', 'ClientController@ChangeStatus')->name('ChangeStatus');

});

//sends the mail to check if it works
	Route::get('/sendMail', 'MailingController@sendMail');

	//shows the form to make the survei
	Route::get('/ShowSurvei/{id}', 'MailingController@ShowSurvei');
	Route::get('/ShowSecondSurvei/{id}', 'MailingController@ShowSecondSurvei');
	//Store the survei
	Route::post('/StorePoints', 'MailingController@StorePoints')->name('StorePoints');
	Route::get('/thanks', 'MailingController@thanks')->name('thanks');