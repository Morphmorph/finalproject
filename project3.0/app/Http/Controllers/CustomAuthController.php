<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Http\Response;
use Hash;
use Session;
class CustomAuthController extends Controller
{
    public function login()
    {
        return view("auth.Login");
    }
    public function registration()
    {
        return view("auth.Registration");
    }
    public function registeruser(Request $request)
    {
        $request -> validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:6|max:8',
            'role'=> 'required'
        ]);
        $user = new user();
        $user ->name = $request ->name;
        $user ->email = $request ->email;
        $user ->password = Hash::make($request ->password);
        $user ->role = $request ->role;
        $res = $user ->save();
        if($res){
            return back() ->with('Success','Registered successfully');
        }
        else{
            return back() ->with('Fail','Something is wrong');
        }
    }
    public function loginuser(Request $request)
    {
        $request -> validate([
            
            'email'=> 'required|email',
            'password'=> 'required|min:6|max:8',
            
        ]);
        $user = User::where('email','=',$request ->email)->first();
        
        if($user)
        {
            if(hash::check($request ->password, $user ->password))
            {
                $request ->session()->put('loginID', $user->id);
                return redirect('dashboard');
            }
        
        else
        {
            return back() ->with('Fail','Incorrect password!');
        }
    
    }
        else
        {
            return back() ->with('Fail','Email address is not registered!');
        }

    }
    public function dash()
    {
        if(Session::has('loginID')){
            $data = User::where('id','=', Session::get('loginID'))->first();
        }
        return view('dashboard', compact('data'));
    }
    public function logout()
    {
    if(Session::has('loginID')){
       (Session::pull('loginID'));
        return redirect('/');
    
    }
}
public function show()
{
    $data = user::all();
    return view('userstable',['users'=>$data]);
}
public function edit($id)
{
    $user = user::find($id);
    return view('edit', compact('user'));
}
public function update(Request $request,$id)
{
    $user = user::find($id);
        $user ->name = $request ->input('name');
        $user ->email = $request ->input('email');
        $user ->update();
    return redirect('userstable')->with('Success','Update successfully');
}
function delete($id)
{
    $data = user::find($id);
    $data -> delete();

    return redirect('/userstable')->with('Successs','Deleted successfully');
}
}
