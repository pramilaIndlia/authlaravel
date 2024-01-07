<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Member;
// use App\Models\Members;
// use Illuminate\Contracts\Validation\Rule;

class AuthController extends Controller
{
    public function showUsers(Request $req)
{
    $req->validate([
        'name' => 'required|string|max:255',
        'lname' => 'required|string|max:255',
        'email' => 'required|email|unique:members|max:255',
        'password' => 'required|string|max:255',
    ]);

    Member::create([
        'name' => $req->name,
        'lname' => $req->lname,
        'email' => $req->email,
        'password' => $req->password,
    ]);
    session()->flash('status', 'Data stored successfully');

    return redirect("users")->with('success', 'Data stored successfully');
}

public function getdata(Request $req)
{
    $data = Member::all(); 
    return view('users', ['data' => $data]);
}

}
