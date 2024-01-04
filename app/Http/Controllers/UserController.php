<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    public function createUser(Request $request)
    {
        $user = new User;
        $user->name = $request->post('name');
        $user->email = $request->post('email');
        $user->password = bcrypt($request->post('password'));
        $user->role_id = $request->post('role_id');
        $user->save();
        print_r($user);

    } 

    public function getUsers()
    {
        $users = User::with(['addresses','role'])->get(); 
        print_r($users->toArray());

    }

   

}
