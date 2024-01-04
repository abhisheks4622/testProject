<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    //
    public function address(Request $request)
    {
        $userAddress = new Address;
        $userAddress->user_id = $request->post('user_id');
        $userAddress->city = $request->post('city');
        $userAddress->house_no = $request->post('house_no');
        $userAddress->state = $request->post('state');
        $userAddress->country = $request->post('country');
        $userAddress->save();
        print_r($userAddress);
    }
}
