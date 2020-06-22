<?php

use Illuminate\Support\Facades\Route;
use App\PostcardSendingService;

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

Route::get('/posts', 'PostController@index');

Route::get('/postcards', function () {
    $postcardService = new PostcardSendingService('sl', 4, 6);
    $postcardService->hello('this is the message','duminda.g.k@gmail.com');
});

Route::get('/customers', 'CustomerController@index');
Route::get('/customers/{customerId}', 'CustomerController@show');
Route::get('/customers/{customerId}/update', 'CustomerController@update');
Route::get('/customers/{customerId}/delete', 'CustomerController@destroy');