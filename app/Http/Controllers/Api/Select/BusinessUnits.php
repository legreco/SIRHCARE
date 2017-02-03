<?php

namespace App\Http\Controllers\Api\Select;
use App\BusinessUnit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BusinessUnits extends Controller
{
    //
    public function __invoke()
    {
        $businessUnits=BusinessUnit::select('id','name')->get();
        return response()->json($businessUnits);
    }
}
