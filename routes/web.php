<?php
use App\Mail\EmailMessage;
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

Route::get('/',
    [
        "as"=>"home_path",
        "uses"=>"PageController@index"
    ]);
Route::get('/about',[
    "as"=>"about_path",
    "uses"=>"PageController@about"
]);
Route::get('/contact',[
    "as"=>"contact_path",
    "uses"=>"ContactController@create"
]);

Route::post('/contact',[
    "as"=>"contact_path",
    "uses"=>"ContactController@store"
]);


