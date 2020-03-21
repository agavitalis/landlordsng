<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace'=>"User"],function(){

    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/listing', function () {
        return view('listing');
    });
    
    Route::get('/agencies', function () {
        return view('agencies');
    });
    
    Route::get('/agents', function () {
        return view('agents');
    });
    
    Route::get('/contact', function () {
        return view('contact');
    });
    
    Auth::routes();
    
    Route::match(['GET','POST'],'/home','HomeController@index')->name('home');

    
});

//Admin routes guarded by tha auth and admin middleware
Route::group(['namespace'=>"Admin"],function(){
    
    Route::match(['GET','POST'],'/admin_dashboard','DashboardController@dashboard')->name('admin_dashboard');
    Route::match(['GET','POST'],'/admin_propertytypes/{id?}','PropertyTypesController@propertytypes')->name('admin_propertytypes');
    Route::match(['GET','POST'],'/admin_propertystates/{id?}','PropertyStatesController@propertystates')->name('admin_propertystates');
    
    Route::match(['GET','POST'],'/admin_propertystates/{id?}','PropertyStatesController@propertystates')->name('admin_propertystates');
 
});