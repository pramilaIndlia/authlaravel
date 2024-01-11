<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Member;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\validator;


class AuthController extends Controller
{
    public function showUsers(Request $req)
{
    $req->validate([
        'name' => 'required|string|max:255',
        'lname' => 'required|string|max:255',
        'email' => 'required|unique:members|email|max:255',
        'password' => 'required|string|min:5',
        'rpass' => 'required|same:password|',


    ]);
    $data = $req->except('rpass', 'password');
        $data['password'] = Hash::make($req->password);
    
    Member::create([
        'name' => $req->name,
        'lname' => $req->lname,
        'email' => $req->email,
        'password' => $req->password,
        'rpass' => $req->rpass,
    ]); 
    
    // session()->flash('status', 'Data stored successfully');
    
    return redirect("users")->with('success', 'Data stored successfully');
    
}

public function getdata(Request $req)
{
    $data = Member::simplePaginate(3);
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

public function deleteAll(Request $req)
    {
        $ids = $req->ids;
        Member::whereIn("id", $ids)->delete();
        return response()->json(['success'=>"Products Deleted successfully."]);
    }

    public function login(){
        return view('login');
    }

    public function loginAction(Request $req){
        return $req;
        // validator::make($req->all(),[
        //     'email'=>'required|email',
        //     'password'=>'required'
        // ])->validate();

        // if (!member::attempt($req->only('email','password'),$req->boolean('remember'))) {
        //     throw ValidationException::withMessage([
        //         'email'=>trans('member.failed')
        //     ]);
            
        // }
        // $req->session()->regenerate();
        // return redirect('users');
    }

}


