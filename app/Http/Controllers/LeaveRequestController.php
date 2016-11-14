<?php

namespace App\Http\Controllers;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLeaveRequestRequest;
use App\LeaveRequest;
use App\Approbation;
use App\Http\Requests;
use App\Employee;
use App\Jobs\SendLeaveRequestSentEmail;
use App\Events\LeaveRequestSubmitted;
use App\User;
use Illuminate\Support\Facades\Auth;
class LeaveRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
       

        $leaveRequests=LeaveRequest::orderBy('created_at','desc')->paginate(10);


        return view('leaves.requests.index',compact('leaveRequests'));


    }

    public function getEmployeeSubordinatesLeaveRequests()
    {

       
        $leaveRequests= Auth::user()->employee->subordinates_leave_requests;
      

        //foreach (Auth::user()->employee->employees as $employee)
        //$leaveRequests=$leaveRequests->merge($employee->subordinates_leave_requests->filter(function ($item){return $item->mustPass2==true;}));

        return view('leaves.requests.index',compact('leaveRequests',$leaveRequests));//

    }
    public function getEmployeeLeaveRequests()
    {


        $leaveRequests=Auth::user()->employee->leave_requests()->orderBy('created_at','desc')->get();

        return view('leaves.requests.index',compact('leaveRequests',$leaveRequests));//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userId=Auth::user()->id;
        $connectedUser=User::find($userId);
        $employee=Employee::find($connectedUser->employee_id);
        $leaveAccounts=$employee->leave_accounts;
        return view('leaves.requests.create',compact('leaveAccounts',$leaveAccounts));//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLeaveRequestRequest $request)
    {
        //;

        $leaveRequest= new LeaveRequest($request->all());


        $leaveRequest->status='EN ATTENTE';
        $leaveRequest->endDate=Carbon::now();

        Auth::user()->employee->leave_requests()->save($leaveRequest);

        event(new LeaveRequestSubmitted($leaveRequest));


        $approbation=new Approbation();
        $approbation->confirmation_code=Uuid::generate()->string;
        $approbation->rejection_code=Uuid::generate()->string;
        $approbation->employee_id= Auth::user()->employee->employee->id;
        $approbation->validationStepNumber=1;
        $leaveRequest->approbations()->save($approbation);


        alert()->success('Vous avez ajouté un nouvel employé avec succès', 'Sauvegarde réussie');

        return redirect('/leaveRequest');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $leaveRequest=LeaveRequest::Find($id);

        return view('leaves.requests.show',compact('leaveRequest'));
    }

    public function approve(Request $request)
    {
        //
        $leaveRequest=LeaveRequest::Find($request->leave_request_id);

        $approbation1=$leaveRequest->approbations->where('validationStepNumber','=',1)->first();


        return  $leaveRequest;
       /* if(($leaveRequest->mustPass2))
        {
            $leaveRequest->mustPass2=false;
            $approbation=new Approbation();
            $approbation->employee_id=$employee->id;
            $approbation->isApproved=true;
            $leaveRequest->status='APPROUVÉ';

            $leaveRequest->save();

            $leaveRequest->approbations()->save($approbation);

           $leaveAccount= $employee->leave_accounts->filter(function ($item) use($leaveRequest){return $item->leave_type_id==$leaveRequest->leave_type_id;})->first();
return $leaveAccount;
       $leaveAccount->balance= $leaveAccount->balance-$leaveRequest->duration;
            $leaveAccount->save();
        }

        if(($leaveRequest->mustPass1))
        {
            $leaveRequest->mustPass1=false;
            $approbation=new Approbation();
            $approbation->employee_id=$employee->id;
            $approbation->isApproved=true;
            $leaveRequest->mustPass2=true;
            $leaveRequest->save();

            $leaveRequest->approbations()->save($approbation);

        }*/




        session()->flash('status', 'Vous avez validé la demande avec succès!!');

        return redirect('subordinate/leaveRequests');
        
    }


    public function reject($id)
    {
        //

        $userId=Auth::user()->id;
        $connectedUser=User::find($userId);
        $employee=Employee::find($connectedUser->employee_id);



        $leaveRequest=LeaveRequest::Find($id);
        $approbation=new Approbation();
        $approbation->employee_id=$employee->id;
        $approbation->isApproved=false;


        $leaveRequest->approbations()->save($approbation);
        session()->flash('status', 'Vous avez rejeté la demande avec succès');
        return redirect('subordinate/leaveRequests');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function approveViaEmail($confirmation_code)
    {

    }


    public  function rejectViaEmail($rejection_code)
    {
        
    }
}
