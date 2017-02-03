<?php

namespace App\Http\Controllers\Api\Select;
use App\Fund;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Funds extends Controller
{
    //
    public function __invoke()
    {
        $funds=Fund::select('id','name')->get();
        return response()->json($funds);
    }
}
