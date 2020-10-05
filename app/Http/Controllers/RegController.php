<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegController extends Controller
{
    public function index()
    {
        return view('registration');
    }

    public function inserting(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'email' => 'required|string|email:rfc,dns|unique:users',
            'state'=>'required|string|',
            'district'=>'required|string|',
            'password'=>'required|min:8',
            'confirmpassword'=>'required|min:8|same:password',
        ]);
       User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'state' => $request['state'],
            'district' => $request['district'],
            'password' => Hash::make($request['password']),
        ]);
        return back()->with('message','Registered successfully');
    }
}
