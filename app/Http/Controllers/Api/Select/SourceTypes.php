<?php

namespace App\Http\Controllers\Api\Select;
use App\SourceType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SourceTypes extends Controller
{
    //

    public function __invoke()
    {
        $sourceTypes=SourceType::select('id','name')->get();
        return response()->json($sourceTypes);
    }
}
