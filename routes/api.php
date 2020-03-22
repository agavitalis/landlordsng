<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/admin_addpropertytype','Admin\PropertyTypesController@create');
Route::get('/admin_getpropertytype','Admin\PropertyTypesController@getTypes');
Route::put('/updatepropertytype','Admin\PropertyTypesController@updatePropertyType');
Route::delete('/deletetype/{id}', 'Admin\PropertyTypesController@destroy');
