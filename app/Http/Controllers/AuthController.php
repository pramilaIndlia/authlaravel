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
        'rpass' => 'required|string|max:255',

    ]);

    Member::create([
        'name' => $req->name,
        'lname' => $req->lname,
        'email' => $req->email,
        'password' => $req->password,
        'rpass'=>$req->rpass,
    ]);

    
    // session()->flash('status', 'Data stored successfully');

    return redirect("users");
    // ->with('success', 'Data stored successfully');
}

public function getdata(Request $req)
{
    $data = Member::all(); 
    return view('users', ['data' => $data]);

}
public function deleteData($id){
    $data=Member::find($id);
    $data->delete();
    return redirect('users');

}

public function editData($id) {
    $data = Member::find($id);
    return view('edit',['data'=>$data]);
}
public function update(Request $req){
    $data =Member::find($req->id);
    if ($data) {
        if ($req->filled('name')) {
            $data->name = $req->name;
        }

        if ($req->filled('lname')) {
            $data->lname = $req->lname;
        }

        if ($req->filled('email')) {
            $data->email = $req->email;
        }

        if ($req->filled('password')) {
            $data->password = $req->password;
        }

        if ($req->filled('rpass')) {
            $data->rpass = $req->rpass;
        }
        $data->save();
        return redirect('users');
    } 
}

}
