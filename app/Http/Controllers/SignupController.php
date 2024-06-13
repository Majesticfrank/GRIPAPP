<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;

class SignupController extends Controller

{

    protected $variable;
    public function __construct(User $User){
          $this->variable=$User;  
    }
    public function Signup(){
        return view('Signupview');
    }


    public function SignupUser(SignupRequest $request){
        $request->validated();
        $Userdetails=[
            'Email'=>$request->Email,
            'FirstName'=>$request->FirstName,
            'LastName'=>$request->LastName,
            'PhoneNumber'=>$request->PhoneNumber,
            'Password'=>bcrypt($request->Password),
            'Referralcode'=>$request->Referralcode,
        ];

 $User=$this->variable->create($Userdetails);
 return redirect()->route('login')->with('success', 'Registration successful. please login');


    }
   
}
