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

Route::get('/', function () {
    return view('user.index');
});

Route::group(['prefix'=>'sama','namespace'=>'user'],function(){
    Route::get('home','usercontroller@home');
    Route::get('aboutus','usercontroller@about');
    Route::get('fix','fixController@fix');
    Route::get('allproduct','usercontroller@allproduct');
    Route::get('contactus','contactuscontroller@contactus');
    Route::post('contactus','contactuscontroller@contactusform');

    Route::get('singleproduct','usercontroller@singleproduct');

    Route::post('fix', 'fixController@fixPost');
});
