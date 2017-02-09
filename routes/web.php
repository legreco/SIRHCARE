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
Route::get('pars/submitted','Web\ParController@submitted');
Route::get('pars/drafts','Web\ParController@drafts');
Route::post('pars/save','Web\ParController@save');
Route::get('/excel', function () {
    //
    $path=base_path() . '/database/seeds/excel/funds.xlsx';
    \Maatwebsite\Excel\Facades\Excel::selectSheets('FUND_CODES')->load($path, function ($sheet) {
        $fc=Collect([]);
        $sheet->each(function($row) use($fc) {


            if($fc->isEmpty() or !$fc->contains($row['fc']))
            {
                $fund= new \App\Fund();
                $fund->id = $row['fc'];
                $fund->name = $row['fc'];
                //error_log('Some message here.');
                $fund->save();
                $fc->push($row['fc']);
              //  dump($fc);

            }

        });
        $sheet->each(function($row) use($fc) {


          $project=new \App\Project();
            $project->id=$row['pid'];
            $project->name=$row['pid'];
            $project->fund_id=$row['fc'];
            $project->description=$row['description'];
            $project->startDate=$row['pid_start_date'];
            $project->endDate=$row['pid_end_date'];
            $project->save();
            

        });



    });

});
Route::get('images/{name}','Web\ImageController@show');
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
Route::resource('notice_periods','Web\NoticePeriodController');
Route::resource('evaluations','Web\EvaluationController');
Route::get('/datatables/employees','Web\EmployeeController@employeesData');
Route::get('/test', function()
{
    header('Content-type: application/pdf');
    $pdf= new FPDI();

// set the sourcefile
    $pdf->setSourceFile(base_path().'/public/pdf/template.pdf');
// import page 1
    $tplIdx = $pdf->importPage(1);
// use the imported page as the template
    $pdf->AddPage();
    $pdf->useTemplate($tplIdx, 0, 0);

// now write some text above the imported page
    $pdf->SetFont('Arial');
    $pdf->SetTextColor(0,0,0);
    $pdf->SetXY(25, 50);
    $pdf->Write(0, "This is just a simple text");

   $pdf->Output();

});
Route::resource('leaves/types','Web\LeaveTypeController');
Route::get('/currencies','Web\CurrencyController@index');
Route::get('days','Web\DayController@index');
Route::resource('contracts','Web\ContractController');
