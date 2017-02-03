<?php

namespace App\Http\Controllers\Api\Select;
use App\DeptId;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeptIds extends Controller
{
    //
    public function __invoke()
    {
        $deptIds=DeptId::select('id','name')->get();
        return response()->json($deptIds);
    }
}
