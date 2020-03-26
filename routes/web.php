<?php

use Illuminate\Support\Facades\Route;

//User routes guarded by tha auth and user middleware when necessary
Route::group(['namespace' => "User"], function () {

    Route::match(['GET', 'POST'], '/', 'HomeController@index')->name('welcome');
    Route::match(['GET', 'POST'], '/listing', 'ListingController@index')->name('listing');

    Route::match(['GET', 'POST'], '/agencies', 'AgencyController@index')->name('agencies');
    Route::match(['GET', 'POST'], '/agency_profile/{id?}', 'AgencyController@agency_profile')->name('agency_profile');

    Route::match(['GET', 'POST'], '/become_an_agent/{id?}', 'AgentController@become_an_agent')->name('become_an_agent');
    Route::match(['GET', 'POST'], '/agents', 'AgentController@index')->name('agents');
    Route::match(['GET', 'POST'], '/contact', 'ContactController@contact')->name('contact');

    Route::match(['GET', 'POST'], '/home', 'HomeController@index')->name('home');

});

//Admin routes guarded by tha auth and admin middleware
Route::group(['namespace' => "Admin"], function () {

    Route::match(['GET', 'POST'], '/admin_dashboard', 'DashboardController@dashboard')->name('admin_dashboard');
    Route::match(['GET', 'POST'], '/admin_propertytypes/{id?}', 'PropertyTypesController@propertytypes')->name('admin_propertytypes');
    Route::match(['GET', 'POST'], '/admin_propertystates/{id?}', 'PropertyStatesController@propertystates')->name('admin_propertystates');
    Route::match(['GET', 'POST'], '/admin_create_agencies/{id?}', 'AgencyController@create')->name('admin_create_agencies');
    Route::get('/admin_agencies','AgencyController@agencies');
    Route::get('/agencies/{id}', 'AgencyController@agency_profile')->name('agency_profile');
});

Auth::routes();
