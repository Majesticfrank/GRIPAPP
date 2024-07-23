<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class DashboardController extends Controller
{

   
    public function UserDashboard(){
        return view('Dashboardview');
    }
    public function  Admin_Dashboard(){
        return view('AdminDashboardView');
    }

    public function overview(){
        return view('Overview');
    }
    public function userManagement(){
        return view('userManagement');
    }
    
    public function giftcardManagement(){
    
        return view('giftcardManagement');
    }
    public function transactionManagement(){
        return view('transactionManagement');
    }
    public function LogOut(Request $request)
    {
        auth()->logout();
        return redirect()->route('login');
    }

    




}
