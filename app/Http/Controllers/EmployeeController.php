<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Employee;
use App\Contract;
use App\BankAccount;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=Employee::paginate(10);
        return view('employees.index',compact('employees',$employees));
        //
    }
    public function getAllEmployees()
    {


        $employees=DB::table('employees')->select('id','firstName as text')->get();
        return response()->json($employees);//
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //






        DB::transaction(function($request) use($request)
        {

            $employee=new Employee($request->all());
            $bankAccount=new BankAccount($request->all());
            $contract= new Contract($request->all());
            $user=new User();
            $user->email=$employee->email;
            $user->name=$employee->fullName;
            $user->password=bcrypt('default');
            $user->active=true;
            try{
                $employee->save();
                $employee->contract()->save($contract);
                $employee->bank_account()->save($bankAccount);
                $employee->user()->save($user);
            } catch (ValidationException $e)
            {
                return redirect('/employee')->withErrors($e->getErrors());
            }

        });
        session()->flash('status', 'Nouvel employé créé avec succès!!!');
        return redirect('/employee');
       





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
    
    public function showProfile()
    {
        //
        $employee_id=Auth::user()->employee_id;
        $employee =Employee::find($employee_id);
        return view('employees.profile',compact('employee',$employee));
        
    }
}
