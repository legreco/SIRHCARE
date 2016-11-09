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
Route::get('employee/profile','EmployeeController@showProfile');
Route::resource('employees','EmployeeController');
Route::post('leaveRequest/approve','LeaveRequestController@approve');
Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');
Route::resource('user','UserController');
Route::resource('permission','PermissionController');
Route::resource('role','RoleController');
Route::resource('resources','ResourceController');

Route::get('leaveRequests/incoming','LeaveRequestController@getEmployeeSubordinatesLeaveRequests');
Route::get('leaveRequests/myRequests','LeaveRequestController@getEmployeeLeaveRequests');
Route::resource('leaveRequest','LeaveRequestController');


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

/*\Event::listen('Illuminate\Database\Events\QueryExecuted', function ($query) {
    var_dump($query->sql);
    var_dump($query->bindings);
    var_dump($query->time);
});*/