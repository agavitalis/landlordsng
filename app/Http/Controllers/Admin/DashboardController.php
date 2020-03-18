<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('adminGuard');
    }

    public function dashboard()
    {
        // $users_count = User::count();
        // $series_count = Series::count();
        // $pro_investors_count = ProInvestor::count();
        // $investors_count = Investor::count();
        //return view('admin.dashboard', compact('series_count','users_count','pro_investors_count','investors_count'));
        return view('admin.dashboard');
    }
}
