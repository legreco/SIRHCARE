<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('permissions','PermissionApiController@index');
Route::get('roles','RoleApiController@index');
Route::get('leave_types','LeaveTypeApiController@index');
Route::resource('notifications','NotificationApiController');
Route::get('user/{id}/notifications','NotificationApiController@getUserNotifications');
Route::resource('employees','Api\EmployeeController');
Route::resource('currencies','Api\CurrencyController');
Route::get('titles','Api\TitleController@index');
Route::get('genders','Api\GenderController@index');
Route::get('select2/departments','Api\DepartmentController@all_select2');
Route::get('select2/locations','Api\LocationController@all_select2');
Route::get('select2/position_statuses','Api\PositionStatusController@all_select2');
Route::get('select2/positions','Api\PositionController@all_select2');
