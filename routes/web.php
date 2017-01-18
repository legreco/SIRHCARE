<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/excel', function () {

    \Maatwebsite\Excel\Facades\Excel::load(base_path() . '/database/seeds/excel/banks.xlsx', function ($reader) {

        // Loop through all sheets
        // $reader->dd();
        // Loop through all sheets
        $array = $reader->toArray();

        foreach ($array as $row) {

            $bank = new \App\Bank();
            //

            $bank->name = $row['name'];
            $bank->code = $row['code'];
            $bank->description = $row['description'];
            $bank->save();

        }


    });


});
Route::get('holiday_list/{id}/apply','Web\HolidayListController@apply');
Auth::routes();
Route::resource('languages','Web\LanguageController');
Route::resource('leave_policies','Web\LeavePolicyController');
Route::resource('pars','Web\ParController');
Route::resource('funds','Web\FundController');
Route::resource('holiday_lists','Web\HolidayListController');
Route::get('image','Web\ImagesController@getImage');
Route::resource('positions','Web\PositionController');
Route::resource('openings','Web\OpeningController');
Route::get('employee/profile','EmployeeController@showProfile');
Route::get('employee/profile','EmployeeController@showProfile');
Route::resource('employees','Web\EmployeeController');
Route::post('leaveRequest/approve','LeaveRequestController@approve');
Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');
Route::resource('users','Web\UserController');
Route::resource('permission','PermissionController');
Route::resource('role','RoleController');
Route::resource('resources','ResourceController');
Route::resource('contract_types','Web\ContractTypeController');
Route::get('leaves/requests/my_requests','Web\LeaveRequestController@myLeaveRequests');
Route::resource('leaves/requests','Web\LeaveRequestController');
Route::get('leaveRequests/incoming','LeaveRequestController@getEmployeeSubordinatesLeaveRequests');
Route::get('leaveRequests/myRequests','LeaveRequestController@getEmployeeLeaveRequests');
Route::resource('leaveRequest','LeaveRequestController');
Route::get('org_charts','Web\OrgChartController@index');
Route::resource('countries','Web\CountryController');
Route::resource('financial_data','Web\FinancialDataController');
Route::resource('exchange_rates','Web\ExchangeRateController');

Route::get('/test', function()
{

  return  \App\Helpers\CalendarHelper::addBusinessDays('2017-01-03',5);


});
Route::resource('leave_types','Web\LeaveTypeController');
Route::get('/currencies','Web\CurrencyController@index');
Route::get('days','Web\DayController@index');
Route::resource('contracts','Web\ContractController');
