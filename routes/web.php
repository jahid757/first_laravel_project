<?php

use Illuminate\Support\Facades\Route;

$CPath = 'App\Http\Controllers';

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

// Route::get('/', function(){
//     return view('HomePage');
// });

// Route::get('/contact', function(){
//     return view('ContactPage');
// });

// Route::get('/about', function(){
//     return view('AboutPage');
// });

Route::get('/',$CPath.'\SiteController@Home');

Route::get('/about',$CPath.'\SiteController@About');

Route::get('/contact',$CPath.'\SiteController@Contact');

Route::get('/arrow', function() {
    return('Arrow is not working in php');
});
