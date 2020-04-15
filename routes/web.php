<?php

use Illuminate\Support\Facades\Route;

//User routes guarded by tha auth and user middleware when necessary
Route::group(['namespace' => "User"], function () {

    Route::match(['GET', 'POST'], '/', 'HomeController@index')->name('welcome');
    Route::match(['GET', 'POST'], '/contact', 'HomeController@contact')->name('contact');

    Route::match(['GET', 'POST'], '/properties', 'PropertyListController@property_list')->name('properties');

    Route::match(['GET', 'POST'], '/become_an_agency/{id?}', 'AgencyController@become_an_agency')->name('become_an_agency');
    Route::match(['GET', 'POST'], '/agencies', 'AgencyController@index')->name('agencies');
    Route::match(['GET', 'POST'], '/agency_profile/{id?}', 'AgencyController@agency_profile')->name('agency_profile');
    Route::match(['GET', 'POST'], '/agent_requests', 'AgencyController@agent_requests')->name('agent_requests');
    Route::match(['GET', 'POST'], '/approve_agent_requst/{id}', 'AgencyController@agent_requests_approve')->name('agent_requests_approve');
    Route::match(['GET', 'POST'], '/reject_agent_requst/{id}', 'AgencyController@agent_requests_reject')->name('agent_requests_reject');
    Route::match(['GET', 'POST'], '/my_agents', 'AgencyController@my_agents')->name('my_agents');


    Route::match(['GET', 'POST'], '/become_an_agent/{id?}', 'AgentController@become_an_agent')->name('become_an_agent');
    Route::match(['GET', 'POST'], '/agents', 'AgentController@index')->name('agents');
    Route::match(['GET', 'POST'], '/agent/{id}', 'AgentController@agent_profile')->name('agent_profile');

    
    Route::match(['GET', 'POST'], '/profile', 'ProfileController@profile')->name('profile');
    
    Route::match(['GET', 'POST'], '/submit_property/{id?}', 'PropertyController@add_property')->name('submit_property');
    Route::match(['GET', 'POST'], '/my_properties/{id?}', 'PropertyController@my_properties')->name('my_properties');
    Route::match(['GET', 'POST'], '/favorite_properties/{id?}', 'PropertyController@favorite_properties')->name('favorite_properties');

    

});

//Admin routes guarded by tha auth and admin middleware
Route::group(['namespace' => "Admin"], function () {

    Route::match(['GET', 'POST'], '/admin_dashboard', 'DashboardController@dashboard')->name('admin_dashboard');
    Route::match(['GET', 'POST'], '/admin_propertytypes/{id?}', 'PropertyTypesController@propertytypes')->name('admin_propertytypes');
    Route::match(['GET', 'POST'], '/admin_propertystatus/{id?}', 'PropertyStatusController@propertystatus')->name('admin_propertystatus');

    Route::match(['GET', 'POST'], '/admin_become_an_agent/{id?}', 'AgentController@become_an_agent')->name('admin_become_an_agent');

    Route::match(['GET', 'POST'], '/admin_create_agencies/{id?}', 'AgencyController@create_agency')->name('admin_create_agencies');
    Route::match(['GET', 'POST'], '/admin_manage_agencies/{id?}', 'AgencyController@manage_agencies')->name('admin_manage_agencies');
    Route::match(['GET', 'POST'], '/admin_edit_agency/{id?}', 'AgencyController@edit_agency')->name('admin_edit_agency');
    Route::match(['GET', 'POST'], '/admin_become_an_agency/{id?}', 'AgencyController@become_an_agency')->name('admin_become_an_agency');

});

Auth::routes();
