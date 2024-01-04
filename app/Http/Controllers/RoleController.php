<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    //
    public function role(Request $request)
    {
        $role = new Role;
        $role->name = $request->post('name');      
        $role->save();
    }
}
