<?php

namespace App\Http\Controllers;
use App\Role;
use Illuminate\Http\Request;

class RoleApiController extends Controller
{
    //
    public function index()
    {

        $roles=Role::select('id','name as text')->get();
        return response()->json($roles);//
    }
}
