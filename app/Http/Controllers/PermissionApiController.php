<?php

namespace App\Http\Controllers;
use App\Permission;
use Illuminate\Http\Request;

class PermissionApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $permissions=Permission::select('id','name as text')->get();
        return response()->json($permissions);//
    }

  
}
