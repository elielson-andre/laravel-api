<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(Request $request){
        $address = Address::all();
        return $address;
    }

    public function findOne(Request $request){
        $address = Address::find($request['id']);
        return $address;
    }

    public function insert(Request $request){
        $rawData = $request->only('address');
        
        $address = Address::create($rawData);
        return $address;
    }
}
