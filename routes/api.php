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

Route::resource('notifications','NotificationApiController');
Route::get('user/{id}/notifications','NotificationApiController@getUserNotifications');
//Route::resource('employees','Api\EmployeeController');
Route::resource('currencies','Api\CurrencyController');
Route::get('titles','Api\TitleController@index');
Route::get('genders','Api\GenderController@index');
Route::get('select2/departments','Api\DepartmentController@all_select2');
Route::get('select2/locations','Api\LocationController@all_select2');
Route::get('select2/position_statuses','Api\PositionStatusController@all_select2');
Route::get('select2/positions','Api\PositionController@all_select2');
Route::get('select/leave_types','Api\Select\LeaveTypes');
Route::get('select/months','Api\Select\Months');
Route::get('select/leave_calculating_methods','Api\Select\LeaveCalculatingMethods');
Route::get('select/currencies','Api\Select\Currencies');
Route::get('select/salary_periods','Api\Select\SalaryPeriods');
Route::get('select/grades','Api\Select\Grades');
Route::get('select/contract_types','Api\Select\ContractTypes');
Route::get('select/education_levels','Api\Select\EducationLevels');
Route::get('select/locations','Api\Select\Locations');
Route::get('select/departments','Api\Select\Departments');
Route::get('select/calendar_years','Api\Select\CalendarYears');
Route::get('select/fonctions','Api\Select\Fonctions');
Route::get('select/holiday/types','Api\Select\HolidayTypes');
Route::resource('leave_types','Api\LeaveTypeController');
Route::get('select/dept_ids','Api\Select\DeptIds');
Route::get('select/funds','Api\Select\Funds');
Route::get('select/business_units','Api\Select\BusinessUnits');
Route::get('select/fund/{id}/projects','Api\Select\FundProjects');
Route::get('select/projects','Api\Select\Projects');
Route::get('select/genders','Api\Select\Genders');
Route::get('select/positions','Api\Select\Positions');
Route::get('select/source_types','Api\Select\SourceTypes');
Route::get('select/employees','Api\Select\Employees');
Route::get('select/countries','Api\Select\Countries');
Route::get('select/banks','Api\Select\Banks');
Route::get('select/position_types','Api\Select\PositionTypes');
Route::get('calendar/holidays','Api\CalendarController@Holidays');
Route::resource('departments','Api\DepartmentController');
Route::resource('holiday_lists','Api\HolidayListController');
Route::get('calendar/next','Api\CalendarController@nextBusinessDay');
