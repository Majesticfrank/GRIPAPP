<?php

namespace App\Http\Controllers;
use auth;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller


{
protected $user;
public function __construct(User $user ){
$this->user= $user;

}


   
    public function Login(){
        return view('loginview');
    }


    public function LoginUser(Request $request){
        $request->validate([
            "Email"=>"required|email",
            "Password"=>"required",
            //dd($request)
        ]);


    $Email=$request->input('Email');
    $Password= $request->input('Password');

    $user=$this->user->where('Email',$Email)->first();

    if($user){ 
        // dd($user);

        if(password_verify($Password, $user->Password)){
            auth()->login($user);
            return redirect()->route('Dashboard');
          
        }
    }
        return back()->withErrors('invalid Email and Password');
    }



}