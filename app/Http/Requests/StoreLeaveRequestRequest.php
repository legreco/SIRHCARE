<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

use App\Employee;
use App\User;
use App\LeaveAccount;
use Illuminate\Support\Facades\Auth;

class StoreLeaveRequestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public $leaveAccount;
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if(Request::has('leave_type_id'))
        {

            $leave_type_id = Request::input('leave_type_id');
            $userId=Auth::user()->id;
            $connectedUser=User::find($userId);
            $employee=Employee::find($connectedUser->employee_id);

            $this->leaveAccount=$employee->leave_accounts->filter(function ($item) use ($leave_type_id){return $item->leave_type_id==$leave_type_id;})->first();
            return [
                'leave_type_id'=>'required',
                'duration' => 'required|integer|min_or_equal_field:'.intval($this->leaveAccount->balance),
                'comments'=>'required',
                'startDate'=>'required'
            ];
        }
        else
        {
            return [
                'leave_type_id'=>'required',
                'duration' => 'required|integer',
                'comments'=>'required',
                'startDate'=>'required'
            ];
        }

    }

    public function messages()
    {
        return [
            'duration.min_or_equal_field' => 'La durée doit être inférieur où égal à votre balance '.$this->leaveAccount->leave_type->name.' qui est de '.intval($this->leaveAccount->balance).' jour(s)',
            'body.required'  => 'A message is required',
        ];
    }
}
