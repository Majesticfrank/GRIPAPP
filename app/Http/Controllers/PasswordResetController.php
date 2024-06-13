<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Notifications\MailNotification;


class PasswordResetController extends Controller

{   protected $user;
    public function __construct(User $user ){
        $this->user=$user;
    }

    public function SendEmailview(){
        return view('Reset');

    }

    public function SendResetLink(Request $request){

        $request->validate([
           'Email'=> 'required',
        ]);
        

        $user=$this->user->where('Email',$request->Email)->first();

        if(!$user){ 
            return redirect()->route('signup')->with('error','user not found please signup')  ;
        }

        $user->notify( new MailNotification([
            'title'=> 'Forgotten password ',
            'url'=>URL::signedRoute('PasswordReset',['Email'=> $user->Email], now()->addMinutes(3)),
            'conclusion'=>'Thank you ',

        ]));
        return view('SendEmailview')->with('success', 'A link has been sent to your email ');
    } 

    }
   
