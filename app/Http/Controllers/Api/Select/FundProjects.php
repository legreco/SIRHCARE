<?php

namespace App\Http\Controllers\Api\Select;
use App\Project;
use App\Fund;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FundProjects extends Controller
{
    //
    public function __invoke($id)
    {
        $fund= Fund::findOrFail($id);
        $fundProjects= $fund->projects()->select('id','name')->get();
        return response()->json($fundProjects);
    }
}
