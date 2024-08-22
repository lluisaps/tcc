<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 
    ['as' =>'site.home',
    'uses'=>'App\Http\Controllers\SiteController@index']);