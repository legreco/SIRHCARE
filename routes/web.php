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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
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
Route::get('leaveRequests/incoming','LeaveRequestController@getEmployeeSubordinatesLeaveRequests');
Route::get('leaveRequests/myRequests','LeaveRequestController@getEmployeeLeaveRequests');
Route::resource('leaveRequest','LeaveRequestController');
Route::get('org_charts','Web\OrgChartController@index');

Route::get('/test', function()
{
    $beautymail = app()->make(Snowfire\Beautymail\Beautymail::class);
    $beautymail->send('emails.welcome', [], function($message)
    {
        $message
            ->to('cherymacgrecoperalte@gmail.com', 'John Smith')
            ->subject('LEAVE REQUEST');
    });

});
Route::resource('leave_types','Web\LeaveTypeController');
Route::get('/currencies','Web\CurrencyController@index');
Route::get('days','Web\DayController@index');
Route::resource('contracts','Web\ContractController');
/*\Event::listen('Illuminate\Database\Events\QueryExecuted', function ($query) {
    var_dump($query->sql);
    var_dump($query->bindings);
    var_dump($query->time);
});*/