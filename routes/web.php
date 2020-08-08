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

// Route::get('/', 'HomeController@index'); 
Auth::routes(); 
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});


 
Route::get('/new-ticket', 'TicketsController@create'); 
Route::post('new-ticket', 'TicketsController@store');


Route::get('openticket', 'TicketsController@creates'); 
Route::post('openticket', 'TicketsController@stores');


 
Route::get('my_tickets', 'TicketsController@userTickets');
 
Route::get('tickets/{ticket_id}', 'TicketsController@show');
 
Route::post('comment', 'CommentsController@postComment');
 
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function (){
 
Route::get('tickets', 'TicketsController@index');
 
Route::post('close_ticket/{ticket_id}', 'TicketsController@close');
 
});

Route::get('rpt_ticketdate', 'DynamicPDFController@index');
Route::get('rpt_ticketdate/pdf', 'DynamicPDFController@pdf');