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

    public function LogOut(Request $request)
    {
        auth()->logout();
        return redirect()->route('login');
    }




}
